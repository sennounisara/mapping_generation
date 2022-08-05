<?php



/**
 * This class defines the structure of the 'piece_sous_type_facture' table.
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
class CommonPieceSousTypeFactureTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonPieceSousTypeFactureTableMap';

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
        $this->setName('piece_sous_type_facture');
        $this->setPhpName('CommonPieceSousTypeFacture');
        $this->setClassname('CommonPieceSousTypeFacture');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('id_sous_type', 'IdSousType', 'INTEGER', 'sous_type_facture', 'id', true, null, null);
        $this->addColumn('libelle', 'Libelle', 'VARCHAR', true, 255, null);
        $this->addColumn('nom_fichier', 'NomFichier', 'VARCHAR', true, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonSousTypeFacture', 'CommonSousTypeFacture', RelationMap::MANY_TO_ONE, array('id_sous_type' => 'id', ), null, null);
        $this->addRelation('CommonFacturePieceJointe', 'CommonFacturePieceJointe', RelationMap::ONE_TO_MANY, array('id' => 'id_piece_sous_type', ), null, null, 'CommonFacturePieceJointes');
    } // buildRelations()

} // CommonPieceSousTypeFactureTableMap
