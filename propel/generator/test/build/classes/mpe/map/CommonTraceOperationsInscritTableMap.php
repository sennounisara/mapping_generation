<?php



/**
 * This class defines the structure of the 'trace_operations_inscrit' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.mpe.map
 */
class CommonTraceOperationsInscritTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonTraceOperationsInscritTableMap';

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
        $this->setName('trace_operations_inscrit');
        $this->setPhpName('CommonTraceOperationsInscrit');
        $this->setClassname('CommonTraceOperationsInscrit');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_trace', 'IdTrace', 'INTEGER', true, null, null);
        $this->addColumn('id_inscrit', 'IdInscrit', 'INTEGER', true, null, 0);
        $this->addColumn('id_entreprise', 'IdEntreprise', 'INTEGER', true, null, 0);
        $this->addColumn('addr_ip', 'AddrIp', 'VARCHAR', true, 15, null);
        $this->addColumn('date', 'Date', 'DATE', true, null, null);
        $this->addColumn('operations', 'Operations', 'LONGVARCHAR', true, null, null);
        $this->addColumn('organisme', 'Organisme', 'VARCHAR', false, 30, null);
        $this->addColumn('ref_consultation', 'RefConsultation', 'VARCHAR', false, 30, null);
        $this->addColumn('afficher', 'Afficher', 'CHAR', true, null, '0');
        $this->getColumn('afficher', false)->setValueSet(array (
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

} // CommonTraceOperationsInscritTableMap
