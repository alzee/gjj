<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Taxon;

class AccountController extends AbstractController
{
    #[Route('/account', name: 'app_account')]
    public function index(): Response
    {
        $user = $this->getUser();
        $menus = [
          ['label' => '缴存余额', 'unit' => '元', 'value' => number_format($user->getBalance() / 100, 2), 'img' => 'wallet'],
          ['label' => '缴存基数', 'unit' => '元', 'value' => number_format($user->getBase()/ 100, 2), 'img' => 'wallet'],
          ['label' => '个人缴存比例', 'unit' => '%', 'value' => number_format($user->getSelfRatio() * 100, 2), 'img' => 'percent'],
          ['label' => '单位缴存比例', 'unit' => '%', 'value' => number_format($user->getCompRatio() * 100, 2), 'img' => 'percent'],
          ['label' => '个人月汇缴额', 'unit' => '元', 'value' => number_format($user->getSelfMonth() / 100, 2), 'img' => 'wallet'],
          ['label' => '单位月汇缴额', 'unit' => '元', 'value' => number_format($user->getCompMonth() / 100, 2), 'img' => 'wallet'],
        ];
        $list = [
          ['label' => '单位名称', 'value' => $user->getCompany()],
          ['label' => '单位账号', 'value' => $user->getCompanyAccount()],
          ['label' => '个人账号', 'value' => $user->getAccount()],
          ['label' => '缴存管理部', 'value' => $user->getDistrict()],
          ['label' => '缴存银行', 'value' => $user->getBank()],
          ['label' => '账户状态', 'value' => array_flip(Taxon::STATUS)[$user->getStatus()]],
          ['label' => '开户日期', 'value' => $user->getStartAt() ? $user->getStartAt()->format('Y-m-d') : ''],
          ['label' => '缴至年月', 'value' => $user->getEndAt() ? $user->getEndAt()->format('Y年m月') : ''],
          ['label' => '绑定银行', 'value' => $user->getBindBank()],
          ['label' => '绑定银行卡号', 'value' => $user->getBankAccount()],
          ['label' => '电子邮箱', 'value' => $user->getEmail()],
        ];
        return $this->render('account/index.html.twig', [
          'menus' => $menus,
          'list' => $list,
        ]);
    }

    #[Route('/account/info', name: 'app_account_info')]
    public function getAccountInfo(): Response
    {
        $user = $this->getUser();
        $list = [
            ['label' => '姓名', 'value' => $user->getName()],
            ['label' => '性别', 'value' => array_flip(Taxon::SEX)[$user->isMale()]],
            ['label' => '身份证号', 'value' => $user->getIdNo()],
            ['label' => '出生日期', 'value' => $user->getBirthAt() ? $user->getBirthAt()->format('Y-m-d') : ''],
            ['label' => '手机号码', 'value' => $user->getPhone()],
        ];
        return $this->render('account/info.html.twig', [
            'list' => $list
        ]);
    }

    #[Route('/account/transactions', name: 'app_transactions')]
    public function getTransactions(): Response
    {
        return $this->render('account/transactions.html.twig', [
        ]);
    }

    #[Route('/account/loan/info', name: 'app_loan_info')]
    public function getLoanInfo(): Response
    {
        return $this->render('account/loan_info.html.twig', [
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
