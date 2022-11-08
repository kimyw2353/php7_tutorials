<?php
ini_set('session.gc_maxlifetime', 10);
class DatabaseSessionHandler implements SessionHandlerInterface{
	
	
	
	private PDO $pdo;
	
	public function __construct(PDO $pdo) {
		$this->pdo = $pdo;
	}
	
	public function close()
	{
		return true;
	}
	
	public function destroy($id)
	{
		$this->pdo
			->prepare('DELETE FROM sessions WHERE `id`=:id')
			->execute([':id'=>$id]);
	}
	
	public function gc($max_lifetime)
	{
		$sth = $this->pdo->prepare('SELECT * FROM sessions');
		if ($sth->execute()) {
			while ($row = $sth->fetchObject()){
				$timestamp = strtotime($row->created_at);
				if (time() - $timestamp > $max_lifetime) {
//					$this->pdo
//						->prepare('DELETE FROM sessions WHERE `id`=:id')
//						->execute([':id=>$row->id']);
					$this->destroy($row->id);
				}
			}
		}
	}
	
	public function open($path, $name)
	{
		return true;
	}
	
	public function read($id)
	{
		$sth = $this->pdo->prepare('SELECT * FROM sessions WHERE `id` = :id');
		if ($sth->execute([ ':id' => $id])) {
			if ($sth->rowCount() > 0) {
				$payload = $row->fetchObject()->payload;
			} else {
				$sth = $this->pdo->prepare('INSERT INTO sessions(`id`) VALUES(:id)');
				$sth->execute([':id' => $id]);
			}
		}
		return $payload ?? '';
	}
	
	public function write($id, $data)
	{
		return $this->pdo
			->prepare('UPDATE sessions SET `payload`=:payload WHERE `id`=:id')
			->execute([':payload'=>$data, ':id' => $id]);
	}
}
session_set_save_handler(new DatabaseSessionHandler(new PDO('mysql:dbname=sessions;host=127.0.0.1;', 'root', 'root')));

session_start();

$_SESSION['message'] = 'Hellow, world';
$_SESSION['foo'] = new stdClass();