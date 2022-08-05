<?php



/**
 * This class defines the structure of the 't_document_piece_collaboratif_commentaire' table.
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
class CommonTDocumentPieceCollaboratifCommentaireTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonTDocumentPieceCollaboratifCommentaireTableMap';

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
        $this->setName('t_document_piece_collaboratif_commentaire');
        $this->setPhpName('CommonTDocumentPieceCollaboratifCommentaire');
        $this->setClassname('CommonTDocumentPieceCollaboratifCommentaire');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('id_piece', 'IdPiece', 'INTEGER', 't_document_piece_collaboratif', 'id_document_piece', true, null, null);
        $this->addColumn('commentaire', 'Commentaire', 'LONGVARCHAR', true, null, null);
        $this->addColumn('id_blob_pj', 'IdBlobPj', 'INTEGER', true, null, null);
        $this->addColumn('nom_pj', 'NomPj', 'VARCHAR', true, 50, null);
        $this->addColumn('date_commentaire', 'DateCommentaire', 'TIMESTAMP', true, null, null);
        $this->addColumn('id_agent', 'IdAgent', 'INTEGER', true, null, null);
        $this->addColumn('nom_agent', 'NomAgent', 'VARCHAR', false, 50, null);
        $this->addColumn('prenom_agent', 'PrenomAgent', 'VARCHAR', false, 50, null);
        $this->addColumn('statut_commentaire', 'StatutCommentaire', 'INTEGER', false, 3, null);
        $this->addColumn('nouvelle_version', 'NouvelleVersion', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonTDocumentPieceCollaboratif', 'CommonTDocumentPieceCollaboratif', RelationMap::MANY_TO_ONE, array('id_piece' => 'id_document_piece', ), null, null);
    } // buildRelations()

} // CommonTDocumentPieceCollaboratifCommentaireTableMap
