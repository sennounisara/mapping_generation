<?php



/**
 * This class defines the structure of the 'Relation_Echange' table.
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
class CommonRelationEchangeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonRelationEchangeTableMap';

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
        $this->setName('Relation_Echange');
        $this->setPhpName('CommonRelationEchange');
        $this->setClassname('CommonRelationEchange');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_auto', 'IdAuto', 'INTEGER', true, null, null);
        $this->addColumn('id_echange', 'IdEchange', 'INTEGER', true, null, 0);
        $this->addColumn('organisme', 'Organisme', 'VARCHAR', true, 30, '');
        $this->addColumn('id_externe', 'IdExterne', 'INTEGER', true, null, 0);
        $this->addColumn('type_relation', 'TypeRelation', 'INTEGER', true, null, 0);
        $this->addColumn('date_envoi', 'DateEnvoi', 'VARCHAR', false, 50, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonRelationEchangeTableMap
