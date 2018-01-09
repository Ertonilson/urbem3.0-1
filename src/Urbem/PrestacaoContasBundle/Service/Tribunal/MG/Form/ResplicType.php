<?php

namespace Urbem\PrestacaoContasBundle\Service\Tribunal\MG\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Urbem\CoreBundle\Entity\Tcemg\Resplic;

class ResplicType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('exercicio', 'hidden');
        $builder->add('codEntidade', 'hidden');
        $builder->add('codModalidade', 'hidden');
        $builder->add('codLicitacao', 'hidden');

        // gestaoPrestacaoContas/fontes/PHP/TCEMG/instancias/configuracao/FMManterResponsavelLicitacao.php:145
        // gestaoPrestacaoContas/fontes/PHP/TCEMG/instancias/configuracao/PRManterResponsavelLicitacao.php:98
        $builder->add('fkSwCgmPessoaFisica', 'prestacao_contas_sw_cgm_pessoa_fisica', [
            'label' => 'Autorização para abertura do procedimento licitatório',
        ]);

        // gestaoPrestacaoContas/fontes/PHP/TCEMG/instancias/configuracao/FMManterResponsavelLicitacao.php:146
        // gestaoPrestacaoContas/fontes/PHP/TCEMG/instancias/configuracao/PRManterResponsavelLicitacao.php:99
        $builder->add('fkSwCgmPessoaFisica1', 'prestacao_contas_sw_cgm_pessoa_fisica', [
            'label' => 'Emissão do edital',
        ]);

        // gestaoPrestacaoContas/fontes/PHP/TCEMG/instancias/configuracao/FMManterResponsavelLicitacao.php:147
        // gestaoPrestacaoContas/fontes/PHP/TCEMG/instancias/configuracao/PRManterResponsavelLicitacao.php:100
        $builder->add('fkSwCgmPessoaFisica2', 'prestacao_contas_sw_cgm_pessoa_fisica', [
            'label' => 'Informação de existência de recursos orçamentários',
        ]);

        // gestaoPrestacaoContas/fontes/PHP/TCEMG/instancias/configuracao/FMManterResponsavelLicitacao.php:148
        // gestaoPrestacaoContas/fontes/PHP/TCEMG/instancias/configuracao/PRManterResponsavelLicitacao.php:101
        $builder->add('fkSwCgmPessoaFisica3', 'prestacao_contas_sw_cgm_pessoa_fisica', [
            'label' => 'Condução do procedimento licitatório',
        ]);

        // gestaoPrestacaoContas/fontes/PHP/TCEMG/instancias/configuracao/FMManterResponsavelLicitacao.php:149
        // gestaoPrestacaoContas/fontes/PHP/TCEMG/instancias/configuracao/PRManterResponsavelLicitacao.php:102
        $builder->add('fkSwCgmPessoaFisica4', 'prestacao_contas_sw_cgm_pessoa_fisica', [
            'label' => 'Homologação',
        ]);

        // gestaoPrestacaoContas/fontes/PHP/TCEMG/instancias/configuracao/FMManterResponsavelLicitacao.php:150
        // gestaoPrestacaoContas/fontes/PHP/TCEMG/instancias/configuracao/PRManterResponsavelLicitacao.php:103
        $builder->add('fkSwCgmPessoaFisica5', 'prestacao_contas_sw_cgm_pessoa_fisica', [
            'label' => 'Adjudicação',
        ]);

        // gestaoPrestacaoContas/fontes/PHP/TCEMG/instancias/configuracao/FMManterResponsavelLicitacao.php:151
        // gestaoPrestacaoContas/fontes/PHP/TCEMG/instancias/configuracao/PRManterResponsavelLicitacao.php:104
        $builder->add('fkSwCgmPessoaFisica6', 'prestacao_contas_sw_cgm_pessoa_fisica', [
            'label' => 'Publicação em órgão Oficial',
        ]);

        // gestaoPrestacaoContas/fontes/PHP/TCEMG/instancias/configuracao/FMManterResponsavelLicitacao.php:152
        // gestaoPrestacaoContas/fontes/PHP/TCEMG/instancias/configuracao/PRManterResponsavelLicitacao.php:105
        $builder->add('fkSwCgmPessoaFisica7', 'prestacao_contas_sw_cgm_pessoa_fisica', [
            'label' => 'Avaliação de Bens',
        ]);

        // gestaoPrestacaoContas/fontes/PHP/TCEMG/instancias/configuracao/FMManterResponsavelLicitacao.php:153
        // gestaoPrestacaoContas/fontes/PHP/TCEMG/instancias/configuracao/PRManterResponsavelLicitacao.php:106
        $builder->add('fkSwCgmPessoaFisica8', 'prestacao_contas_sw_cgm_pessoa_fisica', [
            'label' => 'Pesquisa de preços',
        ]);
    }

    /**
     * @param \Symfony\Component\OptionsResolver\OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', Resplic::class);
    }

    public function getBlockPrefix()
    {
        return parent::getBlockPrefix(); // TODO: Change the autogenerated stub
    }
}