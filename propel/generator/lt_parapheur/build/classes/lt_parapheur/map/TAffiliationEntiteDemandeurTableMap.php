<?php



/**
 * This class defines the structure of the 't_affiliation_entite_demandeur' table.
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
class TAffiliationEntiteDemandeurTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.TAffiliationEntiteDemandeurTableMap';

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
        $this->setName('t_affiliation_entite_demandeur');
        $this->setPhpName('TAffiliationEntiteDemandeur');
        $this->setClassname('TAffiliationEntiteDemandeur');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('ID_POLE', 'IdPole', 'INTEGER', true, null, null);
        $this->addPrimaryKey('ID_ENTITE_DEMANDEUR', 'IdEntiteDemandeur', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // TAffiliationEntiteDemandeurTableMap
