<?php



/**
 * This class defines the structure of the 'Autres_Pieces_Mise_Disposition' table.
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
class CommonAutresPiecesMiseDispositionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonAutresPiecesMiseDispositionTableMap';

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
        $this->setName('Autres_Pieces_Mise_Disposition');
        $this->setPhpName('CommonAutresPiecesMiseDisposition');
        $this->setClassname('CommonAutresPiecesMiseDisposition');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('id_decision_enveloppe', 'IdDecisionEnveloppe', 'INTEGER', true, null, null);
        $this->addColumn('org', 'Org', 'VARCHAR', true, 30, null);
        $this->addColumn('id_destinataire', 'IdDestinataire', 'INTEGER', true, null, null);
        $this->addColumn('id_blob', 'IdBlob', 'INTEGER', true, null, null);
        $this->addColumn('nom_fichier', 'NomFichier', 'VARCHAR', false, 250, null);
        $this->addColumn('taille_fichier', 'TailleFichier', 'VARCHAR', false, 10, null);
        $this->addColumn('date_creation', 'DateCreation', 'VARCHAR', false, 20, null);
        $this->addColumn('horodatage', 'Horodatage', 'BLOB', true, null, null);
        $this->addColumn('untrusteddate', 'Untrusteddate', 'VARCHAR', true, 20, '0000-00-00 00:00:00');
        $this->addColumn('agent_id', 'AgentId', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonAutresPiecesMiseDispositionTableMap
