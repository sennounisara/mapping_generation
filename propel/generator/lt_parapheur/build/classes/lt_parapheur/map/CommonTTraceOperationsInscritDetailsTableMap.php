<?php



/**
 * This class defines the structure of the 'T_trace_operations_inscrit_details' table.
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
class CommonTTraceOperationsInscritDetailsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonTTraceOperationsInscritDetailsTableMap';

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
        $this->setName('T_trace_operations_inscrit_details');
        $this->setPhpName('CommonTTraceOperationsInscritDetails');
        $this->setClassname('CommonTTraceOperationsInscritDetails');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('id_trace', 'IdTrace', 'INTEGER', true, null, null);
        $this->addColumn('date_debut_action', 'DateDebutAction', 'TIMESTAMP', false, null, null);
        $this->addColumn('nom_action', 'NomAction', 'VARCHAR', false, 100, null);
        $this->addColumn('details', 'Details', 'VARCHAR', false, 50, null);
        $this->addColumn('date_fin_action', 'DateFinAction', 'TIMESTAMP', false, null, null);
        $this->addColumn('id_description', 'IdDescription', 'INTEGER', false, 10, null);
        $this->addColumn('afficher', 'Afficher', 'CHAR', true, null, '0');
        $this->getColumn('afficher', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('descripton', 'Descripton', 'VARCHAR', true, 250, null);
        $this->addColumn('log_applet', 'LogApplet', 'CLOB', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonTTraceOperationsInscritDetailsTableMap
