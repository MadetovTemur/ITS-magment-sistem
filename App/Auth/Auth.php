<?php 


namespace App\Auth;


// use App\Auth\AuthInterface;implements AuthInterface
use App\Database\DataBaze;
use App\Session\Session;

/**
 *  
 */
class Auth 
{
	
	function __construct(
		private DataBaze $db,
		private Session $session
	)
	{
		// code...
	}

    public function attempt(string $username, string $password): bool
    {
        $user = $this->db->first($this->table(), [
            $this->username() => $username,
        ]);

        if (! $user) {
            return false;
        }

        if (! password_verify($password, $user[$this->password()])) {
            return false;
        }

        $this->session->set($this->sessionField(), $user['id']);

        return true;
    }

    public function check(): bool
    {
        
        return $this->session->has('id') ;
    }

    public function user(): ?User
    {
        if (! $this->check()) {
            return null;
        }

        // $user = $this->db->first($this->table(), [
        //     'id' => $this->session->get($this->sessionField()),
        // ]);

        // if ($user) {
        //     return new User(
        //         $user['id'],
        //         $user['name'],
        //         $user[$this->username()],
        //         $user[$this->password()],
        //     );
        // }

        return true;
    }

    public function logout(): void
    {
        $this->session->remove($this->destroy());
    }

    public function table(): string
    {
        return $this->config->get('auth.table', 'users');
    }

    public function username(): string
    {
        return $this->config->get('auth.username', 'email');
    }

    public function password(): string
    {
        return $this->config->get('auth.password', 'password');
    }

    public function sessionField(): string
    {
        return $this->config->get('auth.session_field', 'user_id');
    }

    public function id(): ?int
    {
        return $this->session->get($this->sessionField());
    }
}