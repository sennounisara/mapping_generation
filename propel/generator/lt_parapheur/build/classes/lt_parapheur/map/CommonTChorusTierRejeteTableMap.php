<?php



/**
 * This class defines the structure of the 't_chorus_tier_rejete' table.
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
class CommonTChorusTierRejeteTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonTChorusTierRejeteTableMap';

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
        $this->setName('t_chorus_tier_rejete');
        $this->setPhpName('CommonTChorusTierRejete');
        $this->setClassname('CommonTChorusTierRejete');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 20, null);
        $this->addColumn('id_echange', 'IdEchange', 'INTEGER', true, 20, null);
        $this->addColumn('id_tier', 'IdTier', 'VARCHAR', true, 14, null);
        $this->addColumn('code_rejet', 'CodeRejet', 'VARCHAR', false, 255, null);
        $this->addColumn('organisation_achat', 'OrganisationAchat', 'VARCHAR', false, 255, null);
        $this->addColumn('active', 'Active', 'CHAR', true, null, '0');
        $this->getColumn('active', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('date_creation', 'DateCreation', 'VARCHAR', false, 20, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonTChorusTierRejeteTableMap
