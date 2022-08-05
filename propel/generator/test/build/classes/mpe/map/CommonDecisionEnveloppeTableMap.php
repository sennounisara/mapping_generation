<?php



/**
 * This class defines the structure of the 'decisionEnveloppe' table.
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
class CommonDecisionEnveloppeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonDecisionEnveloppeTableMap';

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
        $this->setName('decisionEnveloppe');
        $this->setPhpName('CommonDecisionEnveloppe');
        $this->setClassname('CommonDecisionEnveloppe');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_decision_enveloppe', 'IdDecisionEnveloppe', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, '');
        $this->addColumn('consultation_ref', 'ConsultationRef', 'INTEGER', true, null, 0);
        $this->addColumn('id_offre', 'IdOffre', 'INTEGER', true, null, 0);
        $this->addColumn('lot', 'Lot', 'INTEGER', true, null, 0);
        $this->addColumn('decision', 'Decision', 'CHAR', true, null, '0');
        $this->getColumn('decision', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('date_notification', 'DateNotification', 'VARCHAR', false, 10, null);
        $this->addColumn('code_postal', 'CodePostal', 'VARCHAR', false, 5, null);
        $this->addColumn('pme_pmi', 'PmePmi', 'INTEGER', true, null, 0);
        $this->addColumn('tranche_budgetaire', 'TrancheBudgetaire', 'INTEGER', false, null, null);
        $this->addColumn('montant_marche', 'MontantMarche', 'VARCHAR', false, 50, null);
        $this->addColumn('categorie', 'Categorie', 'INTEGER', false, null, null);
        $this->addColumn('objet_marche', 'ObjetMarche', 'LONGVARCHAR', false, null, null);
        $this->addColumn('commentaire', 'Commentaire', 'LONGVARCHAR', false, null, null);
        $this->addColumn('fichier_joint', 'FichierJoint', 'INTEGER', false, null, null);
        $this->addColumn('nom_fichier_joint', 'NomFichierJoint', 'VARCHAR', false, 100, null);
        $this->addColumn('type_enveloppe', 'TypeEnveloppe', 'CHAR', false, null, null);
        $this->getColumn('type_enveloppe', false)->setValueSet(array (
  0 => '1',
  1 => '2',
));
        $this->addColumn('numero_marche', 'NumeroMarche', 'LONGVARCHAR', false, null, null);
        $this->addColumn('statutEJ', 'Statutej', 'LONGVARCHAR', false, null, null);
        $this->addColumn('note', 'Note', 'VARCHAR', true, 200, '');
        $this->addColumn('classement', 'Classement', 'VARCHAR', true, 200, '');
        $this->addColumn('id_blob_pieces_notification', 'IdBlobPiecesNotification', 'VARCHAR', true, 20, null);
        $this->addColumn('date_fin_marche_previsionnel', 'DateFinMarchePrevisionnel', 'VARCHAR', false, 20, null);
        $this->addColumn('ville', 'Ville', 'VARCHAR', false, 50, null);
        $this->addColumn('acronymePays_Attributaire', 'AcronymepaysAttributaire', 'VARCHAR', false, 10, null);
        $this->addColumn('pays_Attributaire', 'PaysAttributaire', 'VARCHAR', false, 50, null);
        $this->addColumn('siren_Attributaire', 'SirenAttributaire', 'VARCHAR', false, 20, null);
        $this->addColumn('nic_Attributaire', 'NicAttributaire', 'VARCHAR', false, 6, null);
        $this->addColumn('identifiantNational_Attributaire', 'IdentifiantnationalAttributaire', 'VARCHAR', false, 50, null);
        $this->addColumn('rc_ville_attributaire', 'RcVilleAttributaire', 'VARCHAR', false, 250, null);
        $this->addColumn('rc_num_attributaire', 'RcNumAttributaire', 'VARCHAR', false, 250, null);
        $this->addColumn('date_notification_reelle', 'DateNotificationReelle', 'VARCHAR', false, 20, null);
        $this->addColumn('date_fin_marche_reelle', 'DateFinMarcheReelle', 'VARCHAR', false, 20, null);
        $this->addColumn('envoi_interface', 'EnvoiInterface', 'CHAR', true, null, '0');
        $this->getColumn('envoi_interface', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ifu_attributaire', 'IfuAttributaire', 'VARCHAR', false, 200, null);
        $this->addColumn('type_entreprise', 'TypeEntreprise', 'CHAR', false, null, null);
        $this->getColumn('type_entreprise', false)->setValueSet(array (
  0 => '0',
  1 => '1',
  2 => '2',
  3 => '3',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonDecisionEnveloppeTableMap
