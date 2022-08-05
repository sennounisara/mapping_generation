<?php



/**
 * This class defines the structure of the 'piece_jointe_annexe' table.
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
class PieceJointeAnnexeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.PieceJointeAnnexeTableMap';

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
        $this->setName('piece_jointe_annexe');
        $this->setPhpName('PieceJointeAnnexe');
        $this->setClassname('PieceJointeAnnexe');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_PIECE_JOINTE_ANNEXE', 'IdPieceJointeAnnexe', 'INTEGER', true, null, null);
        $this->addColumn('ID_BLOB', 'IdBlob', 'INTEGER', true, null, null);
        $this->addColumn('REVISION', 'Revision', 'INTEGER', true, null, 0);
        $this->addColumn('ID_DEMANDE', 'IdDemande', 'INTEGER', true, null, null);
        $this->addColumn('NOM_PIECE', 'NomPiece', 'VARCHAR', true, 255, null);
        $this->addColumn('EMPLACEMENT_PIECE', 'EmplacementPiece', 'VARCHAR', false, 255, null);
        $this->addColumn('TAG', 'Tag', 'CHAR', true, null, null);
        $this->getColumn('TAG', false)->setValueSet(array (
  0 => '0',
  1 => '1',
  2 => '2',
  3 => '3',
  4 => '4',
  5 => '5',
));
        $this->addColumn('ID_TABLE', 'IdTable', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // PieceJointeAnnexeTableMap
