<?php



/**
 * This class defines the structure of the 'exec_litige_reception' table.
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
class CommonExecLitigeReceptionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonExecLitigeReceptionTableMap';

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
        $this->setName('exec_litige_reception');
        $this->setPhpName('CommonExecLitigeReception');
        $this->setClassname('CommonExecLitigeReception');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('id_litige', 'IdLitige', 'INTEGER', true, null, null);
        $this->addForeignKey('id_reception', 'IdReception', 'INTEGER', 'exec_reception', 'id', true, null, null);
        $this->addForeignKey('id_reception', 'IdReception', 'INTEGER', 'exec_reception', 'id', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonExecReceptionRelatedByIdReception', 'CommonExecReception', RelationMap::MANY_TO_ONE, array('id_reception' => 'id', ), null, null);
        $this->addRelation('CommonExecReceptionRelatedByIdReception', 'CommonExecReception', RelationMap::MANY_TO_ONE, array('id_reception' => 'id', ), null, null);
    } // buildRelations()

} // CommonExecLitigeReceptionTableMap
