<?php



/**
 * This class defines the structure of the 't_document_piece_collaboratif' table.
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
class CommonTDocumentPieceCollaboratifTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonTDocumentPieceCollaboratifTableMap';

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
        $this->setName('t_document_piece_collaboratif');
        $this->setPhpName('CommonTDocumentPieceCollaboratif');
        $this->setClassname('CommonTDocumentPieceCollaboratif');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_document_piece', 'IdDocumentPiece', 'INTEGER', true, null, null);
        $this->addColumn('id_document', 'IdDocument', 'INTEGER', true, null, null);
        $this->addColumn('id_parapheur', 'IdParapheur', 'INTEGER', true, null, 0);
        $this->addColumn('nom_piece', 'NomPiece', 'VARCHAR', true, 100, null);
        $this->addColumn('titre_piece', 'TitrePiece', 'VARCHAR', true, 255, null);
        $this->addForeignKey('type_piece', 'TypePiece', 'INTEGER', 't_type_piece', 'id', true, null, null);
        $this->addColumn('type_objet', 'TypeObjet', 'INTEGER', true, null, null);
        $this->addColumn('statut', 'Statut', 'INTEGER', true, null, null);
        $this->addColumn('id_derniere_version', 'IdDerniereVersion', 'INTEGER', false, null, null);
        $this->addColumn('date_creation', 'DateCreation', 'TIMESTAMP', false, null, null);
        $this->addColumn('date_modification', 'DateModification', 'TIMESTAMP', false, null, null);
        $this->addColumn('id_createur', 'IdCreateur', 'INTEGER', false, null, null);
        $this->addColumn('nom_createur', 'NomCreateur', 'VARCHAR', false, 50, null);
        $this->addColumn('prenom_createur', 'PrenomCreateur', 'VARCHAR', false, 50, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonTTypePiece', 'CommonTTypePiece', RelationMap::MANY_TO_ONE, array('type_piece' => 'id', ), null, null);
        $this->addRelation('CommonTDocumentPieceCollaboratifCommentaire', 'CommonTDocumentPieceCollaboratifCommentaire', RelationMap::ONE_TO_MANY, array('id_document_piece' => 'id_piece', ), null, null, 'CommonTDocumentPieceCollaboratifCommentaires');
        $this->addRelation('CommonTDocumentPieceCollaboratifVersion', 'CommonTDocumentPieceCollaboratifVersion', RelationMap::ONE_TO_MANY, array('id_document_piece' => 'id_piece', ), null, null, 'CommonTDocumentPieceCollaboratifVersions');
    } // buildRelations()

} // CommonTDocumentPieceCollaboratifTableMap
