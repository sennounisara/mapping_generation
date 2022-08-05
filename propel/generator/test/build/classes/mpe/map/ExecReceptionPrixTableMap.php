<?php



/**
 * This class defines the structure of the 'exec_reception_prix' table.
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
class ExecReceptionPrixTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.ExecReceptionPrixTableMap';

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
        $this->setName('exec_reception_prix');
        $this->setPhpName('ExecReceptionPrix');
        $this->setClassname('ExecReceptionPrix');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('id_prix', 'IdPrix', 'INTEGER', 'exec_prix', 'id', true, null, null);
        $this->addForeignKey('id_reception', 'IdReception', 'INTEGER', 'exec_reception', 'id', true, null, null);
        $this->addColumn('qte', 'Qte', 'DOUBLE', false, null, null);
        $this->addColumn('qte_restante', 'QteRestante', 'DOUBLE', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('ExecPrix', 'ExecPrix', RelationMap::MANY_TO_ONE, array('id_prix' => 'id', ), null, null);
        $this->addRelation('ExecReception', 'ExecReception', RelationMap::MANY_TO_ONE, array('id_reception' => 'id', ), null, null);
    } // buildRelations()

} // ExecReceptionPrixTableMap
