<?php



/**
 * This class defines the structure of the 'exec_configuration_formulaire' table.
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
class CommonExecConfigurationFormulaireTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonExecConfigurationFormulaireTableMap';

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
        $this->setName('exec_configuration_formulaire');
        $this->setPhpName('CommonExecConfigurationFormulaire');
        $this->setClassname('CommonExecConfigurationFormulaire');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('id_type_contrat', 'IdTypeContrat', 'INTEGER', 'exec_type_contrat', 'id', true, null, null);
        $this->addForeignKey('id_type_contrat', 'IdTypeContrat', 'INTEGER', 'exec_type_contrat', 'id', true, null, null);
        $this->addForeignKey('id_type_contrat', 'IdTypeContrat', 'INTEGER', 'exec_type_contrat', 'id', true, null, null);
        $this->addColumn('montant_avance', 'MontantAvance', 'CHAR', true, null, '0');
        $this->getColumn('montant_avance', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('penalite', 'Penalite', 'CHAR', true, null, '0');
        $this->getColumn('penalite', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('delai_partiel', 'DelaiPartiel', 'CHAR', true, null, '0');
        $this->getColumn('delai_partiel', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('os_par_phase', 'OsParPhase', 'CHAR', true, null, '0');
        $this->getColumn('os_par_phase', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('montant_caution_definitive', 'MontantCautionDefinitive', 'CHAR', true, null, '0');
        $this->getColumn('montant_caution_definitive', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('retenue_garantie', 'RetenueGarantie', 'CHAR', true, null, '0');
        $this->getColumn('retenue_garantie', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('periode_garantie', 'PeriodeGarantie', 'CHAR', true, null, '0');
        $this->getColumn('periode_garantie', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('decomposition_phase', 'DecompositionPhase', 'CHAR', true, null, '0');
        $this->getColumn('decomposition_phase', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('checkliste_livrable', 'ChecklisteLivrable', 'CHAR', true, null, '0');
        $this->getColumn('checkliste_livrable', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('date_accusee', 'DateAccusee', 'CHAR', true, null, '0');
        $this->getColumn('date_accusee', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('date_notification', 'DateNotification', 'CHAR', true, null, '0');
        $this->getColumn('date_notification', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('mode_passaton', 'ModePassaton', 'CHAR', false, null, '0');
        $this->getColumn('mode_passaton', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('numero_consultation', 'NumeroConsultation', 'CHAR', true, null, '0');
        $this->getColumn('numero_consultation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('reconductible', 'Reconductible', 'CHAR', true, null, '0');
        $this->getColumn('reconductible', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_reception', 'GestionReception', 'CHAR', false, null, '0');
        $this->getColumn('gestion_reception', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_litige', 'GestionLitige', 'CHAR', false, null, '0');
        $this->getColumn('gestion_litige', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('porte_reception', 'PorteReception', 'CHAR', true, null, '0');
        $this->getColumn('porte_reception', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('type_reception', 'TypeReception', 'CHAR', true, null, '0');
        $this->getColumn('type_reception', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonExecTypeContratRelatedByIdTypeContrat', 'CommonExecTypeContrat', RelationMap::MANY_TO_ONE, array('id_type_contrat' => 'id', ), null, null);
        $this->addRelation('CommonExecTypeContratRelatedByIdTypeContrat', 'CommonExecTypeContrat', RelationMap::MANY_TO_ONE, array('id_type_contrat' => 'id', ), null, null);
        $this->addRelation('CommonExecTypeContratRelatedByIdTypeContrat', 'CommonExecTypeContrat', RelationMap::MANY_TO_ONE, array('id_type_contrat' => 'id', ), null, null);
    } // buildRelations()

} // CommonExecConfigurationFormulaireTableMap
