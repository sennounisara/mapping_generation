<?php



/**
 * This class defines the structure of the 'Enveloppe_papier' table.
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
class CommonEnveloppePapierTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonEnveloppePapierTableMap';

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
        $this->setName('Enveloppe_papier');
        $this->setPhpName('CommonEnveloppePapier');
        $this->setClassname('CommonEnveloppePapier');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_enveloppe_papier', 'IdEnveloppePapier', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, '');
        $this->addColumn('offre_papier_id', 'OffrePapierId', 'INTEGER', true, 22, 0);
        $this->addColumn('statut', 'Statut', 'INTEGER', true, null, 0);
        $this->addColumn('supprime', 'Supprime', 'CHAR', true, null, '0');
        $this->addColumn('cryptage', 'Cryptage', 'CHAR', true, null, '1');
        $this->addColumn('is_send', 'IsSend', 'INTEGER', true, 1, 1);
        $this->addColumn('type_env', 'TypeEnv', 'INTEGER', true, 1, 0);
        $this->addColumn('sous_pli', 'SousPli', 'INTEGER', true, 3, 0);
        $this->addColumn('champs_optionnels', 'ChampsOptionnels', 'CLOB', false, null, null);
        $this->addColumn('agent_id_ouverture', 'AgentIdOuverture', 'INTEGER', true, null, 0);
        $this->addColumn('dateheure_ouverture', 'DateheureOuverture', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('statut_enveloppe', 'StatutEnveloppe', 'INTEGER', true, 2, 1);
        $this->addColumn('enveloppe_postule', 'EnveloppePostule', 'CHAR', true, null, '1');
        $this->getColumn('enveloppe_postule', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('nom_agent_ouverture', 'NomAgentOuverture', 'VARCHAR', false, 100, null);
        $this->addColumn('montant', 'Montant', 'DOUBLE', false, null, null);
        $this->addColumn('montant_apres_modification', 'MontantApresModification', 'DOUBLE', false, null, null);
        $this->addColumn('type_attributaire', 'TypeAttributaire', 'CHAR', false, null, null);
        $this->getColumn('type_attributaire', false)->setValueSet(array (
  0 => '1',
  1 => '2',
  2 => '3',
  3 => '4',
));
        $this->addColumn('devise', 'Devise', 'VARCHAR', true, 20, null);
        $this->addColumn('rabais_preference_national', 'RabaisPreferenceNational', 'CHAR', true, null, '0');
        $this->getColumn('rabais_preference_national', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('type_correction_montant', 'TypeCorrectionMontant', 'VARCHAR', false, 20, '');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonEnveloppePapierTableMap
