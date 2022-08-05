<?php



/**
 * This class defines the structure of the 'Pieces_DCE' table.
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
class CommonPiecesDCETableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonPiecesDCETableMap';

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
        $this->setName('Pieces_DCE');
        $this->setPhpName('CommonPiecesDCE');
        $this->setClassname('CommonPiecesDCE');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('nom_Piece', 'NomPiece', 'VARCHAR', true, 255, null);
        $this->addColumn('id_blob', 'IdBlob', 'INTEGER', true, null, null);
        $this->addForeignKey('ref_consultation', 'RefConsultation', 'INTEGER', 'consultation', 'reference', true, null, null);
        $this->addForeignKey('organisme_consultation', 'OrganismeConsultation', 'VARCHAR', 'consultation', 'organisme', true, 255, null);
        $this->addColumn('document_Redac', 'DocumentRedac', 'CHAR', true, null, '0');
        $this->getColumn('document_Redac', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('id_Redac', 'IdRedac', 'INTEGER', false, null, null);
        $this->addColumn('statut', 'Statut', 'INTEGER', true, null, 0);
        $this->addColumn('Type_Piece', 'TypePiece', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonConsultationRelatedByRefConsultation', 'CommonConsultation', RelationMap::MANY_TO_ONE, array('ref_consultation' => 'reference', ), 'CASCADE', 'CASCADE');
        $this->addRelation('CommonConsultationRelatedByOrganismeConsultation', 'CommonConsultation', RelationMap::MANY_TO_ONE, array('organisme_consultation' => 'organisme', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // CommonPiecesDCETableMap
