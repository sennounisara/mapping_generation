<?php



/**
 * This class defines the structure of the 'type_facture' table.
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
class CommonTypeFactureTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonTypeFactureTableMap';

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
        $this->setName('type_facture');
        $this->setPhpName('CommonTypeFacture');
        $this->setClassname('CommonTypeFacture');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('is_locale', 'IsLocale', 'BOOLEAN', true, 1, null);
        $this->addColumn('libelle', 'Libelle', 'VARCHAR', true, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonFacture', 'CommonFacture', RelationMap::ONE_TO_MANY, array('id' => 'id_type', ), null, null, 'CommonFactures');
        $this->addRelation('CommonSousTypeFacture', 'CommonSousTypeFacture', RelationMap::ONE_TO_MANY, array('id' => 'id_type', ), null, null, 'CommonSousTypeFactures');
    } // buildRelations()

} // CommonTypeFactureTableMap
