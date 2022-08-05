<?php



/**
 * This class defines the structure of the 't_CAO_Commission_Agent' table.
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
class CommonTCAOCommissionAgentTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonTCAOCommissionAgentTableMap';

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
        $this->setName('t_CAO_Commission_Agent');
        $this->setPhpName('CommonTCAOCommissionAgent');
        $this->setClassname('CommonTCAOCommissionAgent');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_commission_agent', 'IdCommissionAgent', 'BIGINT', true, null, null);
        $this->addForeignKey('id_agent', 'IdAgent', 'INTEGER', 'Agent', 'id', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addForeignKey('id_commission', 'IdCommission', 'BIGINT', 't_CAO_Commission', 'id_commission', true, null, null);
        $this->addColumn('id_ref_val_type_voix_defaut', 'IdRefValTypeVoixDefaut', 'INTEGER', true, null, null);
        $this->addColumn('type_compte', 'TypeCompte', 'TINYINT', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonAgent', 'CommonAgent', RelationMap::MANY_TO_ONE, array('id_agent' => 'id', ), null, null);
        $this->addRelation('CommonTCAOCommission', 'CommonTCAOCommission', RelationMap::MANY_TO_ONE, array('id_commission' => 'id_commission', ), null, null);
    } // buildRelations()

} // CommonTCAOCommissionAgentTableMap
