<?php



/**
 * This class defines the structure of the 'CategorieLot' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.mpe.map
 */
class CommonCategorieLotTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonCategorieLotTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('CategorieLot');
        $this->setPhpName('CommonCategorieLot');
        $this->setClassname('CommonCategorieLot');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('organisme', 'Organisme', 'VARCHAR' , 'consultation', 'organisme', true, 30, '');
        $this->addForeignPrimaryKey('consultation_ref', 'ConsultationRef', 'INTEGER' , 'consultation', 'reference', true, null, null);
        $this->addPrimaryKey('lot', 'Lot', 'INTEGER', true, null, 0);
        $this->addColumn('description', 'Description', 'VARCHAR', true, 1000, '');
        $this->addColumn('id_tr_description', 'IdTrDescription', 'INTEGER', false, null, null);
        $this->addColumn('categorie', 'Categorie', 'VARCHAR', true, 30, '');
        $this->addColumn('description_detail', 'DescriptionDetail', 'VARCHAR', true, 1000, '');
        $this->addColumn('id_tr_description_detail', 'IdTrDescriptionDetail', 'INTEGER', false, null, null);
        $this->addColumn('code_cpv_1', 'CodeCpv1', 'VARCHAR', false, 8, null);
        $this->addColumn('code_cpv_2', 'CodeCpv2', 'VARCHAR', false, 255, null);
        $this->addColumn('description_fr', 'DescriptionFr', 'VARCHAR', true, 1000, '');
        $this->addColumn('description_en', 'DescriptionEn', 'VARCHAR', true, 255, '');
        $this->addColumn('description_es', 'DescriptionEs', 'VARCHAR', true, 255, '');
        $this->addColumn('description_su', 'DescriptionSu', 'VARCHAR', true, 255, '');
        $this->addColumn('description_du', 'DescriptionDu', 'VARCHAR', true, 255, '');
        $this->addColumn('description_cz', 'DescriptionCz', 'VARCHAR', true, 255, '');
        $this->addColumn('description_ar', 'DescriptionAr', 'CLOB', false, null, null);
        $this->addColumn('description_detail_fr', 'DescriptionDetailFr', 'VARCHAR', true, 1000, '');
        $this->addColumn('description_detail_en', 'DescriptionDetailEn', 'VARCHAR', false, 255, null);
        $this->addColumn('description_detail_es', 'DescriptionDetailEs', 'VARCHAR', false, 255, null);
        $this->addColumn('description_detail_su', 'DescriptionDetailSu', 'VARCHAR', false, 255, null);
        $this->addColumn('description_detail_du', 'DescriptionDetailDu', 'VARCHAR', false, 255, null);
        $this->addColumn('description_detail_cz', 'DescriptionDetailCz', 'VARCHAR', false, 255, null);
        $this->addColumn('description_detail_ar', 'DescriptionDetailAr', 'CLOB', false, null, null);
        $this->addColumn('id_lot_externe', 'IdLotExterne', 'INTEGER', false, null, null);
        $this->addColumn('caution_provisoire', 'CautionProvisoire', 'VARCHAR', false, 255, null);
        $this->addColumn('qualification', 'Qualification', 'VARCHAR', false, 255, null);
        $this->addColumn('agrements', 'Agrements', 'VARCHAR', false, 255, null);
        $this->addColumn('add_echantillion', 'AddEchantillion', 'VARCHAR', false, 255, null);
        $this->addColumn('date_limite_echantillion', 'DateLimiteEchantillion', 'VARCHAR', false, 50, null);
        $this->addColumn('add_reunion', 'AddReunion', 'VARCHAR', false, 255, null);
        $this->addColumn('date_reunion', 'DateReunion', 'VARCHAR', false, 50, null);
        $this->addColumn('variantes', 'Variantes', 'CHAR', false, null, null);
        $this->addColumn('echantillon', 'Echantillon', 'CHAR', true, null, '0');
        $this->getColumn('echantillon', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('reunion', 'Reunion', 'CHAR', true, null, '0');
        $this->getColumn('reunion', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('visites_lieux', 'VisitesLieux', 'CHAR', true, null, '0');
        $this->getColumn('visites_lieux', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('add_echantillion_fr', 'AddEchantillionFr', 'VARCHAR', false, 255, null);
        $this->addColumn('add_echantillion_en', 'AddEchantillionEn', 'VARCHAR', false, 255, null);
        $this->addColumn('add_echantillion_es', 'AddEchantillionEs', 'VARCHAR', false, 255, null);
        $this->addColumn('add_echantillion_su', 'AddEchantillionSu', 'VARCHAR', false, 255, null);
        $this->addColumn('add_echantillion_du', 'AddEchantillionDu', 'VARCHAR', false, 255, null);
        $this->addColumn('add_echantillion_cz', 'AddEchantillionCz', 'VARCHAR', false, 255, null);
        $this->addColumn('add_echantillion_ar', 'AddEchantillionAr', 'VARCHAR', false, 255, null);
        $this->addColumn('add_reunion_fr', 'AddReunionFr', 'VARCHAR', false, 255, null);
        $this->addColumn('add_reunion_en', 'AddReunionEn', 'VARCHAR', false, 255, null);
        $this->addColumn('add_reunion_es', 'AddReunionEs', 'VARCHAR', false, 255, null);
        $this->addColumn('add_reunion_su', 'AddReunionSu', 'VARCHAR', false, 255, null);
        $this->addColumn('add_reunion_du', 'AddReunionDu', 'VARCHAR', false, 255, null);
        $this->addColumn('add_reunion_cz', 'AddReunionCz', 'VARCHAR', false, 255, null);
        $this->addColumn('add_reunion_ar', 'AddReunionAr', 'VARCHAR', false, 255, null);
        $this->addColumn('description_detail_it', 'DescriptionDetailIt', 'CLOB', false, null, null);
        $this->addColumn('description_it', 'DescriptionIt', 'CLOB', false, null, null);
        $this->addColumn('add_echantillion_it', 'AddEchantillionIt', 'VARCHAR', false, 255, '');
        $this->addColumn('add_reunion_it', 'AddReunionIt', 'VARCHAR', false, 255, '');
        $this->addColumn('clause_sociale', 'ClauseSociale', 'CHAR', true, null, '0');
        $this->getColumn('clause_sociale', false)->setValueSet(array (
  0 => '0',
  1 => '1',
  2 => '2',
));
        $this->addColumn('clause_environnementale', 'ClauseEnvironnementale', 'CHAR', true, null, '0');
        $this->getColumn('clause_environnementale', false)->setValueSet(array (
  0 => '0',
  1 => '1',
  2 => '2',
));
        $this->addColumn('decision', 'Decision', 'CHAR', true, null, '0');
        $this->getColumn('decision', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('clause_sociale_condition_execution', 'ClauseSocialeConditionExecution', 'VARCHAR', false, 10, '0');
        $this->addColumn('clause_sociale_insertion', 'ClauseSocialeInsertion', 'VARCHAR', false, 10, '0');
        $this->addColumn('clause_sociale_ateliers_proteges', 'ClauseSocialeAteliersProteges', 'VARCHAR', false, 10, '0');
        $this->addColumn('clause_env_specs_techniques', 'ClauseEnvSpecsTechniques', 'VARCHAR', false, 10, '0');
        $this->addColumn('clause_env_cond_execution', 'ClauseEnvCondExecution', 'VARCHAR', false, 10, '0');
        $this->addColumn('clause_env_criteres_select', 'ClauseEnvCriteresSelect', 'VARCHAR', false, 10, '0');
        $this->addColumn('id_donnee_complementaire', 'IdDonneeComplementaire', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonConsultation', 'CommonConsultation', RelationMap::MANY_TO_ONE, array('organisme' => 'organisme', 'consultation_ref' => 'reference', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // CommonCategorieLotTableMap
