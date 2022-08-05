<?php



/**
 * This class defines the structure of the 'DocumentsAttaches' table.
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
class CommonDocumentsAttachesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonDocumentsAttachesTableMap';

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
        $this->setName('DocumentsAttaches');
        $this->setPhpName('CommonDocumentsAttaches');
        $this->setClassname('CommonDocumentsAttaches');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('id_document', 'IdDocument', 'INTEGER', true, null, 0);
        $this->addColumn('nom_document', 'NomDocument', 'VARCHAR', true, 100, '');
        $this->addColumn('nom_document_fr', 'NomDocumentFr', 'VARCHAR', true, 100, '');
        $this->addColumn('nom_document_es', 'NomDocumentEs', 'VARCHAR', true, 100, '');
        $this->addColumn('nom_document_en', 'NomDocumentEn', 'VARCHAR', true, 100, '');
        $this->addColumn('nom_document_su', 'NomDocumentSu', 'VARCHAR', true, 100, '');
        $this->addColumn('nom_document_du', 'NomDocumentDu', 'VARCHAR', true, 100, '');
        $this->addColumn('nom_document_cz', 'NomDocumentCz', 'VARCHAR', true, 100, '');
        $this->addColumn('nom_document_ar', 'NomDocumentAr', 'VARCHAR', true, 100, '');
        $this->addColumn('nom_document_it', 'NomDocumentIt', 'VARCHAR', true, 100, '');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonDocumentsAttachesTableMap
