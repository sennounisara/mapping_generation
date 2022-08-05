<?php



/**
 * This class defines the structure of the 'EchangePieceJointe' table.
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
class CommonEchangePieceJointeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonEchangePieceJointeTableMap';

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
        $this->setName('EchangePieceJointe');
        $this->setPhpName('CommonEchangePieceJointe');
        $this->setClassname('CommonEchangePieceJointe');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addForeignKey('id_message', 'IdMessage', 'INTEGER', 'Echange', 'id', true, null, 0);
        $this->addColumn('nom_fichier', 'NomFichier', 'VARCHAR', true, 100, '');
        $this->addColumn('piece', 'Piece', 'INTEGER', true, null, 0);
        $this->addColumn('horodatage', 'Horodatage', 'BLOB', true, null, null);
        $this->addColumn('untrusteddate', 'Untrusteddate', 'VARCHAR', true, 25, '');
        $this->addColumn('taille', 'Taille', 'VARCHAR', true, 25, '0');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonEchange', 'CommonEchange', RelationMap::MANY_TO_ONE, array('id_message' => 'id', ), 'CASCADE', null);
    } // buildRelations()

} // CommonEchangePieceJointeTableMap
