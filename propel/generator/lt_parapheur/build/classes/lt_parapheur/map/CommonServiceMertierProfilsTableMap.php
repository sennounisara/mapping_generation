<?php



/**
 * This class defines the structure of the 'Service_Mertier_Profils' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lt_parapheur.map
 */
class CommonServiceMertierProfilsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonServiceMertierProfilsTableMap';

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
        $this->setName('Service_Mertier_Profils');
        $this->setPhpName('CommonServiceMertierProfils');
        $this->setClassname('CommonServiceMertierProfils');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_auto', 'IdAuto', 'INTEGER', true, null, null);
        $this->addColumn('id_interne', 'IdInterne', 'INTEGER', true, null, 0);
        $this->addColumn('id_service_metier', 'IdServiceMetier', 'INTEGER', true, null, 0);
        $this->addColumn('id_externe', 'IdExterne', 'INTEGER', true, null, 0);
        $this->addColumn('libelle', 'Libelle', 'VARCHAR', false, 255, null);
        $this->addColumn('libelle_fr', 'LibelleFr', 'VARCHAR', false, 255, '');
        $this->addColumn('libelle_en', 'LibelleEn', 'VARCHAR', false, 255, '');
        $this->addColumn('libelle_es', 'LibelleEs', 'VARCHAR', false, 255, '');
        $this->addColumn('libelle_su', 'LibelleSu', 'VARCHAR', false, 255, '');
        $this->addColumn('libelle_du', 'LibelleDu', 'VARCHAR', false, 255, '');
        $this->addColumn('libelle_cz', 'LibelleCz', 'VARCHAR', false, 255, '');
        $this->addColumn('libelle_ar', 'LibelleAr', 'VARCHAR', false, 255, '');
        $this->addColumn('libelle_it', 'LibelleIt', 'VARCHAR', false, 255, '');
        $this->addColumn('show_profile_for_hyperadmin_only', 'ShowProfileForHyperadminOnly', 'CHAR', true, null, '0');
        $this->getColumn('show_profile_for_hyperadmin_only', false)->setValueSet(array (
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

} // CommonServiceMertierProfilsTableMap
