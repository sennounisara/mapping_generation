<?php



/**
 * This class defines the structure of the 't_entite_demandeur' table.
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
class TEntiteDemandeurTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.TEntiteDemandeurTableMap';

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
        $this->setName('t_entite_demandeur');
        $this->setPhpName('TEntiteDemandeur');
        $this->setClassname('TEntiteDemandeur');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_ENTITE_DEMANDEUR', 'IdEntiteDemandeur', 'INTEGER', true, null, null);
        $this->addColumn('DENOMINATION_FR', 'DenominationFr', 'VARCHAR', false, 255, null);
        $this->addColumn('DENOMINATION_AR', 'DenominationAr', 'VARCHAR', false, 255, null);
        $this->addColumn('mail', 'Mail', 'VARCHAR', false, 255, null);
        $this->addColumn('telephone', 'Telephone', 'VARCHAR', false, 255, null);
        $this->addColumn('fax', 'Fax', 'VARCHAR', false, 255, null);
        $this->addColumn('adresse', 'Adresse', 'VARCHAR', false, 255, null);
        $this->addColumn('adresse2', 'Adresse2', 'VARCHAR', false, 255, null);
        $this->addColumn('cp', 'Cp', 'VARCHAR', false, 10, null);
        $this->addColumn('ville', 'Ville', 'VARCHAR', false, 255, null);
        $this->addColumn('path_fr', 'PathFr', 'VARCHAR', false, 255, null);
        $this->addColumn('path_ar', 'PathAr', 'VARCHAR', false, 255, null);
        $this->addColumn('ID_REGION', 'IdRegion', 'INTEGER', false, null, null);
        $this->addColumn('ID_PROVINCE', 'IdProvince', 'INTEGER', false, null, null);
        $this->addColumn('ID_COMMUNE', 'IdCommune', 'INTEGER', false, null, null);
        $this->addColumn('COMMUNE', 'Commune', 'VARCHAR', false, 255, null);
        $this->addColumn('ID_PAYS', 'IdPays', 'INTEGER', false, null, null);
        $this->addColumn('SIGLE_FR', 'SigleFr', 'VARCHAR', false, 255, null);
        $this->addColumn('SIGLE_AR', 'SigleAr', 'VARCHAR', false, 255, null);
        $this->addColumn('PATH_SIGLE_FR', 'PathSigleFr', 'VARCHAR', false, 255, null);
        $this->addColumn('PATH_SIGLE_AR', 'PathSigleAr', 'VARCHAR', false, 255, null);
        $this->addColumn('ID_EXTERNE', 'IdExterne', 'VARCHAR', false, 25, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // TEntiteDemandeurTableMap
