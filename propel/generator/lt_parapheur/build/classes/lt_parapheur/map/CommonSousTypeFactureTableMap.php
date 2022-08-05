<?php



/**
 * This class defines the structure of the 'sous_type_facture' table.
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
class CommonSousTypeFactureTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonSousTypeFactureTableMap';

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
        $this->setName('sous_type_facture');
        $this->setPhpName('CommonSousTypeFacture');
        $this->setClassname('CommonSousTypeFacture');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('libelle', 'Libelle', 'VARCHAR', true, 255, null);
        $this->addForeignKey('id_type', 'IdType', 'INTEGER', 'type_facture', 'id', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonTypeFacture', 'CommonTypeFacture', RelationMap::MANY_TO_ONE, array('id_type' => 'id', ), null, null);
        $this->addRelation('CommonFacture', 'CommonFacture', RelationMap::ONE_TO_MANY, array('id' => 'id_sous_type', ), null, null, 'CommonFactures');
        $this->addRelation('CommonPieceSousTypeFacture', 'CommonPieceSousTypeFacture', RelationMap::ONE_TO_MANY, array('id' => 'id_sous_type', ), null, null, 'CommonPieceSousTypeFactures');
    } // buildRelations()

} // CommonSousTypeFactureTableMap
