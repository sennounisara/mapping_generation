<?php



/**
 * This class defines the structure of the 't_agent_ticket' table.
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
class TAgentTicketTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.TAgentTicketTableMap';

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
        $this->setName('t_agent_ticket');
        $this->setPhpName('TAgentTicket');
        $this->setClassname('TAgentTicket');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_AGENT_ISSUE', 'IdAgentIssue', 'INTEGER', true, null, null);
        $this->addForeignKey('ID_AGENT', 'IdAgent', 'INTEGER', 'agent', 'ID', true, null, null);
        $this->addColumn('ID_ISSUE', 'IdIssue', 'INTEGER', false, null, null);
        $this->addColumn('DATE_CREATION', 'DateCreation', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Agent', 'Agent', RelationMap::MANY_TO_ONE, array('ID_AGENT' => 'ID', ), null, null);
    } // buildRelations()

} // TAgentTicketTableMap
