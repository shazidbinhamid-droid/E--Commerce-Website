<?php

class AuthController extends Controller
{
    public function login()
    {
        if (isset($_SESSION['user_id'])) {
            $this->redirect('/');
        }
        $this->view('auth/login');
    }

    public function register()
    {
        if (isset($_SESSION['user_id'])) {
            $this->redirect('/');
        }
        $this->view('auth/register');
    }

    public function registerPost()
    {
        $data = [
            'name' => trim($_POST['name']),
            'email' => trim($_POST['email']),
            'password' => trim($_POST['password']),
            'confirm_password' => trim($_POST['confirm_password']),
            'name_err' => '',
            'email_err' => '',
            'password_err' => '',
            'confirm_password_err' => ''
        ];

        // Validate Name
        if (empty($data['name'])) {
            $data['name_err'] = 'Please enter name';
        }

        // Validate Email
        if (empty($data['email'])) {
            $data['email_err'] = 'Please enter email';
        } else {
            $userModel = $this->model('User');
            if ($userModel->findUserByEmail($data['email'])) {
                $data['email_err'] = 'Email is already taken';
            }
        }

        // Validate Password
        if (empty($data['password'])) {
            $data['password_err'] = 'Please enter password';
        } elseif (strlen($data['password']) < 6) {
            $data['password_err'] = 'Password must be at least 6 characters';
        }

        // Validate Confirm Password
        if (empty($data['confirm_password'])) {
            $data['confirm_password_err'] = 'Please confirm password';
        } else {
            if ($data['password'] != $data['confirm_password']) {
                $data['confirm_password_err'] = 'Passwords do not match';
            }
        }

        if (empty($data['email_err']) && empty($data['name_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])) {
            // Hash Password
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

            // Register User
            $userModel = $this->model('User');
            if ($userModel->register($data)) {
                $this->redirect('/login');
            } else {
                die('Something went wrong');
            }

        } else {
            // Load view with errors
            $this->view('auth/register', $data);
        }
    }

    public function loginPost()
    {
        $data = [
            'email' => trim($_POST['email']),
            'password' => trim($_POST['password']),
            'email_err' => '',
            'password_err' => '',
        ];

        if (empty($data['email'])) {
            $data['email_err'] = 'Please enter email';
        }

        if (empty($data['password'])) {
            $data['password_err'] = 'Please enter password';
        }

        if (empty($data['email_err']) && empty($data['password_err'])) {
            $userModel = $this->model('User');
            $loggedInUser = $userModel->login($data['email'], $data['password']);

            if ($loggedInUser) {
                // Create Session
                $_SESSION['user_id'] = $loggedInUser['id'];
                $_SESSION['user_email'] = $loggedInUser['email'];
                $_SESSION['user_name'] = $loggedInUser['name'];
                $_SESSION['user_role'] = $loggedInUser['role'];

                $this->redirect('/');
            } else {
                $data['password_err'] = 'Password or email is incorrect';
                $this->view('auth/login', $data);
            }
        } else {
            $this->view('auth/login', $data);
        }
    }

    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);
        unset($_SESSION['user_role']);
        session_destroy();
        $this->redirect('/login');
    }
}
