<?php



/**
 * This class defines the structure of the 't_CAO_Commission_Intervenant_Externe' table.
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
class CommonTCAOCommissionIntervenantExterneTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonTCAOCommissionIntervenantExterneTableMap';

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
        $this->setName('t_CAO_Commission_Intervenant_Externe');
        $this->setPhpName('CommonTCAOCommissionIntervenantExterne');
        $this->setClassname('CommonTCAOCommissionIntervenantExterne');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_commission_intervenant_externe', 'IdCommissionIntervenantExterne', 'BIGINT', true, null, null);
        $this->addForeignKey('id_intervenant_externe', 'IdIntervenantExterne', 'BIGINT', 't_CAO_Intervenant_Externe', 'id_intervenant_externe', true, null, null);
        $this->addForeignKey('id_commission', 'IdCommission', 'BIGINT', 't_CAO_Commission', 'id_commission', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('id_ref_val_type_voix_defaut', 'IdRefValTypeVoixDefaut', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonTCAOCommission', 'CommonTCAOCommission', RelationMap::MANY_TO_ONE, array('id_commission' => 'id_commission', ), null, null);
        $this->addRelation('CommonTCAOIntervenantExterne', 'CommonTCAOIntervenantExterne', RelationMap::MANY_TO_ONE, array('id_intervenant_externe' => 'id_intervenant_externe', ), null, null);
    } // buildRelations()

} // CommonTCAOCommissionIntervenantExterneTableMap
