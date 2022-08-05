<?php



/**
 * This class defines the structure of the 'Mesure_Type_Procedure' table.
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
class CommonMesureTypeProcedureTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonMesureTypeProcedureTableMap';

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
        $this->setName('Mesure_Type_Procedure');
        $this->setPhpName('CommonMesureTypeProcedure');
        $this->setClassname('CommonMesureTypeProcedure');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_tag_name', 'IdTagName', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('libelle_tag_name', 'LibelleTagName', 'VARCHAR', true, 255, '');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonMesureTypeProcedureTableMap
