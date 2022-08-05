<?php



/**
 * This class defines the structure of the 'Tiers' table.
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
class CommonTiersTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonTiersTableMap';

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
        $this->setName('Tiers');
        $this->setPhpName('CommonTiers');
        $this->setClassname('CommonTiers');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_tiers', 'IdTiers', 'INTEGER', true, null, null);
        $this->addColumn('login', 'Login', 'VARCHAR', true, 50, null);
        $this->addColumn('password', 'Password', 'VARCHAR', true, 50, null);
        $this->addColumn('denomination', 'Denomination', 'VARCHAR', true, 250, null);
        $this->addColumn('fonctionnalite', 'Fonctionnalite', 'VARCHAR', true, 50, null);
        $this->addColumn('id_entite', 'IdEntite', 'VARCHAR', false, 250, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonTiersTableMap
