<?php



/**
 * This class defines the structure of the 't_forme_prix_has_ref_type_prix' table.
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
class CommonTFormePrixHasRefTypePrixTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonTFormePrixHasRefTypePrixTableMap';

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
        $this->setName('t_forme_prix_has_ref_type_prix');
        $this->setPhpName('CommonTFormePrixHasRefTypePrix');
        $this->setClassname('CommonTFormePrixHasRefTypePrix');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('id_forme_prix', 'IdFormePrix', 'INTEGER', true, null, null);
        $this->addPrimaryKey('id_type_prix', 'IdTypePrix', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonTFormePrixHasRefTypePrixTableMap
