<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $menus = [
            ['label' => '账户信息', 'icon' => 'icon_account', 'url' => '/account'],
            ['label' => '明细账', 'icon' => 'icon_banlace', 'url' => '/account/transactions'],
            ['label' => '贷款信息', 'icon' => 'icon_loanInfo', 'url' => '/account/loan/info'],
            ['label' => '贷款进度', 'icon' => 'icon_loanProcess', 'url' => '/account/loan/progress'],
            ['label' => '冲还贷签约', 'icon' => 'icon_ts', 'url' => '/account/loan/direct_repay'],
            ['label' => '提前还款', 'icon' => 'icon_loanProcess', 'url' => '/account/loan/repay'],
            ['label' => '退休提取', 'icon' => 'icon_retire', 'url' => '/account/retire'],
            ['label' => '手机变更', 'icon' => 'icon-phone_cg', 'url' => '/account/phone/change'],
            ['label' => '密码重置', 'icon' => 'icon_pwdrest', 'url' => '/account/password/reset'],
            ['label' => '银行卡绑定', 'icon' => 'icon_hzlp', 'url' => '/account/card/bind'],
            ['label' => '我的消息', 'icon' => 'icon_msg2', 'url' => '/account/msg'],
            ['label' => '退出登录', 'icon' => 'icon_wsearch', 'url' => '/logout'],
        ];
        return $this->render('home/index.html.twig', [
            'menus' => $menus,
        ]);
    }
}
