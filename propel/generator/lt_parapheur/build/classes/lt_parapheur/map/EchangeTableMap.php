<?php



/**
 * This class defines the structure of the 'echange' table.
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
class EchangeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.EchangeTableMap';

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
        $this->setName('echange');
        $this->setPhpName('Echange');
        $this->setClassname('Echange');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_ECHANGE', 'IdEchange', 'INTEGER', true, null, null);
        $this->addColumn('ID_DEMANDE', 'IdDemande', 'INTEGER', true, null, null);
        $this->addColumn('ID_AGENT', 'IdAgent', 'INTEGER', false, null, null);
        $this->addColumn('EMETTEUR', 'Emetteur', 'VARCHAR', false, 255, null);
        $this->addColumn('DESTINATAIRE', 'Destinataire', 'VARCHAR', false, 255, null);
        $this->addColumn('DATE_CREATION', 'DateCreation', 'TIMESTAMP', false, null, null);
        $this->addColumn('ID_PIECE_JOINTE', 'IdPieceJointe', 'INTEGER', false, null, null);
        $this->addColumn('NOM_PIECE_JOINTE', 'NomPieceJointe', 'VARCHAR', false, 255, null);
        $this->addColumn('TYPE_ECHANGE', 'TypeEchange', 'VARCHAR', false, 255, null);
        $this->addColumn('FORMAT', 'Format', 'VARCHAR', false, 255, null);
        $this->addColumn('COMMENTAIRE', 'Commentaire', 'LONGVARCHAR', false, null, null);
        $this->addColumn('DATE_ECHANGE', 'DateEchange', 'DATE', false, null, null);
        $this->addColumn('ID_ENTITE', 'IdEntite', 'INTEGER', false, null, null);
        $this->addColumn('REFERENCE_COURRIER', 'ReferenceCourrier', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // EchangeTableMap
