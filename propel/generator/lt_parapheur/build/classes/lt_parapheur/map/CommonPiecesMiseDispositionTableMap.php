<?php



/**
 * This class defines the structure of the 'Pieces_Mise_Disposition' table.
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
class CommonPiecesMiseDispositionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonPiecesMiseDispositionTableMap';

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
        $this->setName('Pieces_Mise_Disposition');
        $this->setPhpName('CommonPiecesMiseDisposition');
        $this->setClassname('CommonPiecesMiseDisposition');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('Id_type_doc', 'IdTypeDoc', 'INTEGER', true, null, null);
        $this->addPrimaryKey('id_decision_enveloppe', 'IdDecisionEnveloppe', 'INTEGER', true, null, null);
        $this->addColumn('id_externe', 'IdExterne', 'INTEGER', false, null, null);
        $this->addPrimaryKey('org', 'Org', 'VARCHAR', true, 30, null);
        $this->addColumn('lot', 'Lot', 'INTEGER', false, null, null);
        $this->addColumn('consultation_ref', 'ConsultationRef', 'INTEGER', true, null, null);
        $this->addColumn('Date_mise_disposition', 'DateMiseDisposition', 'TIMESTAMP', true, null, null);
        $this->addColumn('Statut_disposition', 'StatutDisposition', 'INTEGER', true, 1, 0);
        $this->addColumn('Date_recuperation', 'DateRecuperation', 'TIMESTAMP', false, null, null);
        $this->addColumn('Statut_recuperation', 'StatutRecuperation', 'INTEGER', true, 1, 0);
        $this->addColumn('Message', 'Message', 'VARCHAR', false, 250, null);
        $this->addColumn('Id_blob', 'IdBlob', 'INTEGER', false, null, null);
        $this->addPrimaryKey('Id_destinataire', 'IdDestinataire', 'INTEGER', true, null, 0);
        $this->addColumn('type', 'Type', 'INTEGER', false, 1, null);
        $this->addColumn('url_externe', 'UrlExterne', 'VARCHAR', false, 100, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonPiecesMiseDispositionTableMap
