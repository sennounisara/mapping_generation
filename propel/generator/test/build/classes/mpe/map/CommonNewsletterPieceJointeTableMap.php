<?php



/**
 * This class defines the structure of the 'NewsletterPieceJointe' table.
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
class CommonNewsletterPieceJointeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonNewsletterPieceJointeTableMap';

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
        $this->setName('NewsletterPieceJointe');
        $this->setPhpName('CommonNewsletterPieceJointe');
        $this->setClassname('CommonNewsletterPieceJointe');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('id_newsletter', 'IdNewsletter', 'INTEGER', true, null, 0);
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
    } // buildRelations()

} // CommonNewsletterPieceJointeTableMap
