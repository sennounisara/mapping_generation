<?php



/**
 * This class defines the structure of the 'Lt_Referentiel' table.
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
class CommonLtReferentielTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonLtReferentielTableMap';

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
        $this->setName('Lt_Referentiel');
        $this->setPhpName('CommonLtReferentiel');
        $this->setClassname('CommonLtReferentiel');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('code_libelle', 'CodeLibelle', 'VARCHAR', true, 200, null);
        $this->addColumn('entreprise', 'Entreprise', 'CHAR', true, null, '0');
        $this->getColumn('entreprise', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('consultation', 'Consultation', 'CHAR', true, null, '0');
        $this->getColumn('consultation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('lot', 'Lot', 'CHAR', true, null, '0');
        $this->getColumn('lot', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('agent', 'Agent', 'CHAR', true, null, '0');
        $this->getColumn('agent', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('obligatoire', 'Obligatoire', 'CHAR', true, null, '0');
        $this->getColumn('obligatoire', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('type_search', 'TypeSearch', 'CHAR', true, null, '0');
        $this->getColumn('type_search', false)->setValueSet(array (
  0 => '0',
  1 => '1',
  2 => '2',
  3 => '3',
  4 => '4',
));
        $this->addColumn('pages', 'Pages', 'VARCHAR', false, 400, null);
        $this->addColumn('path_config', 'PathConfig', 'VARCHAR', false, 200, null);
        $this->addColumn('mode_affichage', 'ModeAffichage', 'VARCHAR', false, 20, null);
        $this->addColumn('mode_modification', 'ModeModification', 'VARCHAR', false, 20, null);
        $this->addColumn('mode_recherche', 'ModeRecherche', 'VARCHAR', false, 20, null);
        $this->addColumn('Type', 'Type', 'CHAR', true, null, '0');
        $this->getColumn('Type', false)->setValueSet(array (
  0 => '0',
  1 => '1',
  2 => '2',
));
        $this->addColumn('organismes', 'Organismes', 'VARCHAR', false, 400, null);
        $this->addColumn('libelle_info_bulle', 'LibelleInfoBulle', 'VARCHAR', false, 200, null);
        $this->addColumn('logo', 'Logo', 'VARCHAR', false, 200, null);
        $this->addColumn('defaultValue', 'Defaultvalue', 'VARCHAR', false, 255, null);
        $this->addColumn('dependance_allotissement', 'DependanceAllotissement', 'CHAR', true, null, '0');
        $this->getColumn('dependance_allotissement', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('data_type', 'DataType', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonLtReferentielTableMap
