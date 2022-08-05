<?php



/**
 * This class defines the structure of the 't_demande_pj_ca' table.
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
class TDemandePjCaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.TDemandePjCaTableMap';

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
        $this->setName('t_demande_pj_ca');
        $this->setPhpName('TDemandePjCa');
        $this->setClassname('TDemandePjCa');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_PJ_CA', 'IdPjCa', 'INTEGER', true, null, null);
        $this->addColumn('ID_DEMANDE', 'IdDemande', 'INTEGER', true, null, null);
        $this->addColumn('ID_AGENT', 'IdAgent', 'INTEGER', false, null, null);
        $this->addColumn('NOM_PJ', 'NomPj', 'VARCHAR', false, 255, null);
        $this->addColumn('DATE_CREATION', 'DateCreation', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // TDemandePjCaTableMap
