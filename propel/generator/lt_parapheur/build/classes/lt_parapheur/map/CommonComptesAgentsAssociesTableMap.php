<?php



/**
 * This class defines the structure of the 'comptes_agents_associes' table.
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
class CommonComptesAgentsAssociesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonComptesAgentsAssociesTableMap';

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
        $this->setName('comptes_agents_associes');
        $this->setPhpName('CommonComptesAgentsAssocies');
        $this->setClassname('CommonComptesAgentsAssocies');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('compte_principal', 'ComptePrincipal', 'INTEGER', true, null, null);
        $this->addPrimaryKey('compte_secondaire', 'CompteSecondaire', 'INTEGER', true, null, null);
        $this->addColumn('statut_activation_compte_secondaire', 'StatutActivationCompteSecondaire', 'CHAR', true, null, null);
        $this->getColumn('statut_activation_compte_secondaire', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('UID_ECHANGE', 'UidEchange', 'VARCHAR', false, 32, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonComptesAgentsAssociesTableMap
