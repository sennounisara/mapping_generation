<?php



/**
 * This class defines the structure of the 'Alerte' table.
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
class CommonAlerteTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonAlerteTableMap';

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
        $this->setName('Alerte');
        $this->setPhpName('CommonAlerte');
        $this->setClassname('CommonAlerte');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('id_inscrit', 'IdInscrit', 'INTEGER', true, null, 0);
        $this->addColumn('denomination', 'Denomination', 'VARCHAR', true, 200, '');
        $this->addColumn('periodicite', 'Periodicite', 'CHAR', true, null, '');
        $this->addColumn('xmlCriteria', 'Xmlcriteria', 'LONGVARCHAR', false, null, null);
        $this->addColumn('categorie', 'Categorie', 'VARCHAR', false, 30, null);
        $this->addColumn('id_initial', 'IdInitial', 'INTEGER', true, null, 0);
        $this->addColumn('format', 'Format', 'VARCHAR', true, 3, '1');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonAlerteTableMap
