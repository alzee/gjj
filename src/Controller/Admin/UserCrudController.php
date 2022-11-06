<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TelephoneField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\PercentField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Dto\SearchDto;
use EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FieldCollection;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FilterCollection;
use EasyCorp\Bundle\EasyAdminBundle\Orm\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield IdField::new('id')->onlyOnIndex();
        yield TextField::new('username');
        yield MoneyField::new('balance')
            ->setCurrency('CNY')
        ;
        yield MoneyField::new('base')
            ->setCurrency('CNY')
        ;
        yield PercentField::new('selfRatio')
            ->hideOnIndex()
        ;
        yield PercentField::new('compRatio')
            ->hideOnIndex()
        ;
        yield MoneyField::new('selfMonth')
            ->setCurrency('CNY')
            ->hideOnIndex()
        ;
        yield MoneyField::new('compMonth')
            ->setCurrency('CNY')
            ->hideOnIndex()
        ;
        yield TextField::new('company')
            ->hideOnIndex()
        ;
        yield TextField::new('companyAccount')
            ->hideOnIndex()
        ;
        yield TextField::new('account')
            ->hideOnIndex()
        ;
        yield TextField::new('district')
            ->hideOnIndex()
        ;
        yield TextField::new('bank')
            ->hideOnIndex()
        ;
        yield ChoiceField::new('status')
            ->setChoices(['封存' => 0, '正常' => 1])
            ->hideOnIndex()
        ;
        yield DateField::new('startAt')
            ->hideOnIndex()
        ;
        yield DateField::new('endAt')
            ->hideOnIndex()
        ;
        yield TextField::new('bindBank')
            ->hideOnIndex()
        ;
        yield TextField::new('bankAccount')
            ->hideOnIndex()
        ;
        yield EmailField::new('email')
            ->hideOnIndex()
        ;
        yield TextField::new('name');
        yield ChoiceField::new('sex')
            ->setChoices(['女' => 0, '男' => 1])
        ;
        yield TextField::new('idNo');
        yield DateField::new('birthAt')
            ->hideOnIndex()
        ;
        yield TelephoneField::new('phone');
        yield TextField::new('plainPassword')
            ->hideOnIndex()
        ;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setDefaultSort(['id' => 'DESC'])
            // ->setPageTitle('index', 'Sale')
            // ->setSearchFields(['buyer.name', 'orderItems.product.name'])
            // ->setHelp('index', $helpIndex)
            // ->setHelp('new', $helpNew)
        ;
    }

    public function configureActions(Actions $actions): Actions
    {
        if ($this->isGranted('ROLE_ADMIN')) {
            return $actions;
        } else {
            return $actions
                // ->disable(Action::DELETE, Action::NEW, Action::INDEX)
            ;
        }
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('sex')
        ;
    }

    public function createIndexQueryBuilder(SearchDto $searchDto, EntityDto $entityDto, FieldCollection $fields, FilterCollection $filters): QueryBuilder
    {
        $uid = $this->getUser()->getId();
        $response = $this->container->get(EntityRepository::class)->createQueryBuilder($searchDto, $entityDto, $fields, $filters);
        $response
            ->andWhere("entity.id != $uid");
        return $response;
    }
}
