<?php



/**
 * This class defines the structure of the 'chorus_numeros_marches' table.
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
class CommonChorusNumerosMarchesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonChorusNumerosMarchesTableMap';

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
        $this->setName('chorus_numeros_marches');
        $this->setPhpName('CommonChorusNumerosMarches');
        $this->setClassname('CommonChorusNumerosMarches');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('numero_marche', 'NumeroMarche', 'VARCHAR', true, 250, '');
        $this->addColumn('acronyme_organisme', 'AcronymeOrganisme', 'VARCHAR', true, 100, '');
        $this->addColumn('id_decision', 'IdDecision', 'INTEGER', true, null, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonChorusNumerosMarchesTableMap
