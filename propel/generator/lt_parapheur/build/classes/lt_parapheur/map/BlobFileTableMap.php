<?php



/**
 * This class defines the structure of the 'blob_file' table.
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
class BlobFileTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.BlobFileTableMap';

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
        $this->setName('blob_file');
        $this->setPhpName('BlobFile');
        $this->setClassname('BlobFile');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('revision', 'Revision', 'INTEGER', true, null, 0);
        $this->addColumn('name', 'Name', 'LONGVARCHAR', true, null, null);
        $this->addColumn('deletion_datetime', 'DeletionDatetime', 'TIMESTAMP', false, null, null);
        $this->addColumn('contenu', 'Contenu', 'LONGVARCHAR', false, null, null);
        $this->addColumn('annotation', 'Annotation', 'LONGVARCHAR', false, null, null);
        $this->addColumn('TYPE_CRYPT', 'TypeCrypt', 'VARCHAR', false, 50, null);
        $this->addColumn('vecteur', 'Vecteur', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // BlobFileTableMap
