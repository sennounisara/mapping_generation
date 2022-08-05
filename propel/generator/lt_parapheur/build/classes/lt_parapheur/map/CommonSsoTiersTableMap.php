<?php



/**
 * This class defines the structure of the 'Sso_Tiers' table.
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
class CommonSsoTiersTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonSsoTiersTableMap';

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
        $this->setName('Sso_Tiers');
        $this->setPhpName('CommonSsoTiers');
        $this->setClassname('CommonSsoTiers');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('id_sso_tiers', 'IdSsoTiers', 'VARCHAR', true, 50, null);
        $this->addColumn('id_tiers', 'IdTiers', 'INTEGER', true, null, null);
        $this->addColumn('id_fonctionnalite', 'IdFonctionnalite', 'VARCHAR', true, 50, null);
        $this->addColumn('date_connexion', 'DateConnexion', 'VARCHAR', true, 20, null);
        $this->addColumn('date_last_request', 'DateLastRequest', 'VARCHAR', true, 20, null);
        $this->addColumn('id_entite', 'IdEntite', 'VARCHAR', false, 250, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonSsoTiersTableMap
