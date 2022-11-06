<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccountController extends AbstractController
{
    #[Route('/account', name: 'app_account')]
    public function index(): Response
    {
        return $this->render('account/index.html.twig', [
        ]);
    }

    #[Route('/transactions', name: 'app_transactions')]
    public function getTransactions(): Response
    {
        return $this->render('account/transactions.html.twig', [
        ]);
    }

    #[Route('/account/loan/info', name: 'app_loan_info')]
    public function getLoanInfo(): Response
    {
        return $this->render('account/no_info.html.twig', [
        ]);
    }

    #[Route('/account/loan/progress', name: 'app_loan_progress')]
    public function getLoanProgress(): Response
    {
        return $this->render('account/no_info.html.twig', [
        ]);
    }

    #[Route('/account/loan/direct_repay', name: 'app_loan_direct_repay')]
    public function directRepay(): Response
    {
        return $this->render('account/no_info.html.twig', [
        ]);
    }

    #[Route('/account/loan/repay', name: 'app_loan_repay')]
    public function repay(): Response
    {
        return $this->render('account/no_info.html.twig', [
        ]);
    }

    #[Route('/account/retire', name: 'app_retire')]
    public function retire(): Response
    {
        return $this->render('account/no_info.html.twig', [
        ]);
    }

    #[Route('/account/phone/change', name: 'app_phone_change')]
    public function chPhone(): Response
    {
        return $this->render('account/no_info.html.twig', [
        ]);
    }

    #[Route('/account/password/reset', name: 'app_password_reset')]
    public function resetPassword(): Response
    {
        return $this->render('account/no_info.html.twig', [
        ]);
    }

    #[Route('/account/card/bind', name: 'app_card_bind')]
    public function cardBind(): Response
    {
        return $this->render('account/no_info.html.twig', [
        ]);
    }

    #[Route('/account/msg', name: 'app_msg')]
    public function getMsg(): Response
    {
        return $this->render('account/no_info.html.twig', [
        ]);
    }
}
