<?php



/**
 * This class defines the structure of the 't_CAO_Seance_Intervenant_Externe' table.
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
class CommonTCAOSeanceIntervenantExterneTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonTCAOSeanceIntervenantExterneTableMap';

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
        $this->setName('t_CAO_Seance_Intervenant_Externe');
        $this->setPhpName('CommonTCAOSeanceIntervenantExterne');
        $this->setClassname('CommonTCAOSeanceIntervenantExterne');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_seance_intervenant_externe', 'IdSeanceIntervenantExterne', 'BIGINT', true, null, null);
        $this->addForeignKey('id_seance', 'IdSeance', 'BIGINT', 't_CAO_Seance', 'id_seance', true, null, null);
        $this->addForeignKey('id_intervenant_externe', 'IdIntervenantExterne', 'BIGINT', 't_CAO_Intervenant_Externe', 'id_intervenant_externe', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('id_ref_val_type_voix', 'IdRefValTypeVoix', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonTCAOIntervenantExterne', 'CommonTCAOIntervenantExterne', RelationMap::MANY_TO_ONE, array('id_intervenant_externe' => 'id_intervenant_externe', ), null, null);
        $this->addRelation('CommonTCAOSeance', 'CommonTCAOSeance', RelationMap::MANY_TO_ONE, array('id_seance' => 'id_seance', ), null, null);
    } // buildRelations()

} // CommonTCAOSeanceIntervenantExterneTableMap
