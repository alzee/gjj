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
        $menus = [
          ['label' => '缴存余额', 'unit' => '元', 'value' => '123', 'img' => 'wallet'],
          ['label' => '缴存基数', 'unit' => '元', 'value' => '123', 'img' => 'wallet'],
          ['label' => '个人缴存比例', 'unit' => '%', 'value' => '123', 'img' => 'percent'],
          ['label' => '单位缴存比例', 'unit' => '%', 'value' => '123', 'img' => 'percent'],
          ['label' => '个人月汇缴额', 'unit' => '元', 'value' => '123', 'img' => 'wallet'],
          ['label' => '单位月汇缴额', 'unit' => '元', 'value' => '123', 'img' => 'wallet'],
        ];
        $list = [
          ['label' => '单位名称', 'value' => 'test'],
          ['label' => '单位账号', 'value' => 'test'],
          ['label' => '个人账号', 'value' => 'test'],
          ['label' => '缴存管理部', 'value' => 'test'],
          ['label' => '缴存银行', 'value' => 'test'],
          ['label' => '账户状态', 'value' => 'test'],
          ['label' => '开户日期', 'value' => 'test'],
          ['label' => '缴至年月', 'value' => 'test'],
          ['label' => '绑定银行', 'value' => 'test'],
          ['label' => '绑定银行卡号', 'value' => 'test'],
          ['label' => '电子邮箱', 'value' => 'test'],
        ];
        return $this->render('account/index.html.twig', [
          'menus' => $menus,
          'list' => $list
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
