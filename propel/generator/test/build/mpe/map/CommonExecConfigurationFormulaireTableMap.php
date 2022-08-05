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
        $this->addColumn('montant_avance', 'MontantAvance', 'CHAR', true, null, '0');
        $this->getColumn('montant_avance', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('panalite', 'Panalite', 'CHAR', true, null, '0');
        $this->getColumn('panalite', false)->setValueSet(array (
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
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonExecConfigurationFormulaireTableMap
