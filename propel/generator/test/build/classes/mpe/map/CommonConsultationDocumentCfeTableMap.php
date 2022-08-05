<?php



/**
 * This class defines the structure of the 'consultation_document_cfe' table.
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
class CommonConsultationDocumentCfeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonConsultationDocumentCfeTableMap';

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
        $this->setName('consultation_document_cfe');
        $this->setPhpName('CommonConsultationDocumentCfe');
        $this->setClassname('CommonConsultationDocumentCfe');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('id_justificatif', 'IdJustificatif', 'INTEGER', true, null, null);
        $this->addForeignKey('ref_consultation', 'RefConsultation', 'INTEGER', 'consultation', 'reference', true, null, null);
        $this->addColumn('organisme_consultation', 'OrganismeConsultation', 'VARCHAR', true, 30, null);
        $this->addColumn('nom_fichier', 'NomFichier', 'VARCHAR', true, 255, null);
        $this->addColumn('id_entreprise', 'IdEntreprise', 'INTEGER', false, null, null);
        $this->addColumn('taille_document', 'TailleDocument', 'VARCHAR', false, 80, null);
        $this->addColumn('id_blob', 'IdBlob', 'INTEGER', true, null, null);
        $this->addColumn('type_document', 'TypeDocument', 'VARCHAR', false, 255, null);
        $this->addColumn('date_fin_validite', 'DateFinValidite', 'VARCHAR', false, 20, '');
        $this->addColumn('horodatage', 'Horodatage', 'BLOB', true, null, null);
        $this->addColumn('untrusteddate', 'Untrusteddate', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonConsultation', 'CommonConsultation', RelationMap::MANY_TO_ONE, array('ref_consultation' => 'reference', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // CommonConsultationDocumentCfeTableMap
