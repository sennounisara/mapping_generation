<?php



/**
 * This class defines the structure of the 't_document_piece_collaboratif_version' table.
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
class CommonTDocumentPieceCollaboratifVersionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonTDocumentPieceCollaboratifVersionTableMap';

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
        $this->setName('t_document_piece_collaboratif_version');
        $this->setPhpName('CommonTDocumentPieceCollaboratifVersion');
        $this->setClassname('CommonTDocumentPieceCollaboratifVersion');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_version_piece_document', 'IdVersionPieceDocument', 'INTEGER', true, null, null);
        $this->addForeignKey('id_piece', 'IdPiece', 'INTEGER', 't_document_piece_collaboratif', 'id_document_piece', true, null, null);
        $this->addColumn('date_creation', 'DateCreation', 'TIMESTAMP', true, null, null);
        $this->addColumn('date_modification', 'DateModification', 'TIMESTAMP', true, null, null);
        $this->addColumn('hash', 'Hash', 'VARCHAR', true, 500, null);
        $this->addColumn('id_blob', 'IdBlob', 'INTEGER', true, null, null);
        $this->addColumn('taille_piece', 'TaillePiece', 'VARCHAR', true, 50, null);
        $this->addColumn('extension_document', 'ExtensionDocument', 'VARCHAR', true, 50, null);
        $this->addColumn('version', 'Version', 'VARCHAR', true, 10, null);
        $this->addColumn('nom_agent', 'NomAgent', 'VARCHAR', true, 50, null);
        $this->addColumn('prenom_agent', 'PrenomAgent', 'VARCHAR', true, 50, null);
        $this->addColumn('nom_document', 'NomDocument', 'VARCHAR', true, 50, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonTDocumentPieceCollaboratif', 'CommonTDocumentPieceCollaboratif', RelationMap::MANY_TO_ONE, array('id_piece' => 'id_document_piece', ), null, null);
    } // buildRelations()

} // CommonTDocumentPieceCollaboratifVersionTableMap
