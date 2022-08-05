<?php



/**
 * This class defines the structure of the 'facture_piece_jointe' table.
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
class CommonFacturePieceJointeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonFacturePieceJointeTableMap';

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
        $this->setName('facture_piece_jointe');
        $this->setPhpName('CommonFacturePieceJointe');
        $this->setClassname('CommonFacturePieceJointe');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('id_facture', 'IdFacture', 'INTEGER', 'facture_piece_jointe', 'id', true, null, null);
        $this->addColumn('id_blob_piece_jointe', 'IdBlobPieceJointe', 'INTEGER', true, null, null);
        $this->addColumn('nom', 'Nom', 'VARCHAR', true, 255, null);
        $this->addForeignKey('id_piece_sous_type', 'IdPieceSousType', 'INTEGER', 'piece_sous_type_facture', 'id', true, null, null);
        $this->addColumn('nom_fichier', 'NomFichier', 'VARCHAR', false, 255, null);
        $this->addColumn('id_blob_piece_signe', 'IdBlobPieceSigne', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonFacturePieceJointeRelatedByIdFacture', 'CommonFacturePieceJointe', RelationMap::MANY_TO_ONE, array('id_facture' => 'id', ), null, null);
        $this->addRelation('CommonPieceSousTypeFacture', 'CommonPieceSousTypeFacture', RelationMap::MANY_TO_ONE, array('id_piece_sous_type' => 'id', ), null, null);
        $this->addRelation('CommonFacturePieceJointeRelatedById', 'CommonFacturePieceJointe', RelationMap::ONE_TO_MANY, array('id' => 'id_facture', ), null, null, 'CommonFacturePieceJointesRelatedById');
    } // buildRelations()

} // CommonFacturePieceJointeTableMap
