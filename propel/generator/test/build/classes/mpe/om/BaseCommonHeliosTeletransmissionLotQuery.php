<?php


/**
 * Base class that represents a query for the 'Helios_teletransmission_lot' table.
 *
 * 
 *
 * @method CommonHeliosTeletransmissionLotQuery orderByIdTeletransmission($order = Criteria::ASC) Order by the id_teletransmission column
 * @method CommonHeliosTeletransmissionLotQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonHeliosTeletransmissionLotQuery orderByLot($order = Criteria::ASC) Order by the lot column
 * @method CommonHeliosTeletransmissionLotQuery orderByNumeroMarche($order = Criteria::ASC) Order by the numero_marche column
 * @method CommonHeliosTeletransmissionLotQuery orderByIdsEnvActesEngagements($order = Criteria::ASC) Order by the ids_env_actes_engagements column
 * @method CommonHeliosTeletransmissionLotQuery orderByIdsEnveloppesItems($order = Criteria::ASC) Order by the ids_enveloppes_items column
 * @method CommonHeliosTeletransmissionLotQuery orderByIdsDocsAcceptes($order = Criteria::ASC) Order by the ids_docs_acceptes column
 * @method CommonHeliosTeletransmissionLotQuery orderByIdsMsgNotif($order = Criteria::ASC) Order by the ids_msg_notif column
 * @method CommonHeliosTeletransmissionLotQuery orderByLotInTransmission($order = Criteria::ASC) Order by the lot_in_transmission column
 * @method CommonHeliosTeletransmissionLotQuery orderByStatutEnvoi($order = Criteria::ASC) Order by the statut_envoi column
 * @method CommonHeliosTeletransmissionLotQuery orderByIdZipSend($order = Criteria::ASC) Order by the id_zip_send column
 * @method CommonHeliosTeletransmissionLotQuery orderByNomLettreCommande($order = Criteria::ASC) Order by the nom_lettre_commande column
 * @method CommonHeliosTeletransmissionLotQuery orderByLettreCommande($order = Criteria::ASC) Order by the lettre_commande column
 * @method CommonHeliosTeletransmissionLotQuery orderByHorodatage($order = Criteria::ASC) Order by the horodatage column
 * @method CommonHeliosTeletransmissionLotQuery orderByUntrusteddate($order = Criteria::ASC) Order by the untrusteddate column
 * @method CommonHeliosTeletransmissionLotQuery orderByTaille($order = Criteria::ASC) Order by the taille column
 * @method CommonHeliosTeletransmissionLotQuery orderByValiderComptable($order = Criteria::ASC) Order by the valider_comptable column
 *
 * @method CommonHeliosTeletransmissionLotQuery groupByIdTeletransmission() Group by the id_teletransmission column
 * @method CommonHeliosTeletransmissionLotQuery groupByOrganisme() Group by the organisme column
 * @method CommonHeliosTeletransmissionLotQuery groupByLot() Group by the lot column
 * @method CommonHeliosTeletransmissionLotQuery groupByNumeroMarche() Group by the numero_marche column
 * @method CommonHeliosTeletransmissionLotQuery groupByIdsEnvActesEngagements() Group by the ids_env_actes_engagements column
 * @method CommonHeliosTeletransmissionLotQuery groupByIdsEnveloppesItems() Group by the ids_enveloppes_items column
 * @method CommonHeliosTeletransmissionLotQuery groupByIdsDocsAcceptes() Group by the ids_docs_acceptes column
 * @method CommonHeliosTeletransmissionLotQuery groupByIdsMsgNotif() Group by the ids_msg_notif column
 * @method CommonHeliosTeletransmissionLotQuery groupByLotInTransmission() Group by the lot_in_transmission column
 * @method CommonHeliosTeletransmissionLotQuery groupByStatutEnvoi() Group by the statut_envoi column
 * @method CommonHeliosTeletransmissionLotQuery groupByIdZipSend() Group by the id_zip_send column
 * @method CommonHeliosTeletransmissionLotQuery groupByNomLettreCommande() Group by the nom_lettre_commande column
 * @method CommonHeliosTeletransmissionLotQuery groupByLettreCommande() Group by the lettre_commande column
 * @method CommonHeliosTeletransmissionLotQuery groupByHorodatage() Group by the horodatage column
 * @method CommonHeliosTeletransmissionLotQuery groupByUntrusteddate() Group by the untrusteddate column
 * @method CommonHeliosTeletransmissionLotQuery groupByTaille() Group by the taille column
 * @method CommonHeliosTeletransmissionLotQuery groupByValiderComptable() Group by the valider_comptable column
 *
 * @method CommonHeliosTeletransmissionLotQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonHeliosTeletransmissionLotQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonHeliosTeletransmissionLotQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonHeliosTeletransmissionLot findOne(PropelPDO $con = null) Return the first CommonHeliosTeletransmissionLot matching the query
 * @method CommonHeliosTeletransmissionLot findOneOrCreate(PropelPDO $con = null) Return the first CommonHeliosTeletransmissionLot matching the query, or a new CommonHeliosTeletransmissionLot object populated from the query conditions when no match is found
 *
 * @method CommonHeliosTeletransmissionLot findOneByIdTeletransmission(int $id_teletransmission) Return the first CommonHeliosTeletransmissionLot filtered by the id_teletransmission column
 * @method CommonHeliosTeletransmissionLot findOneByOrganisme(string $organisme) Return the first CommonHeliosTeletransmissionLot filtered by the organisme column
 * @method CommonHeliosTeletransmissionLot findOneByLot(int $lot) Return the first CommonHeliosTeletransmissionLot filtered by the lot column
 * @method CommonHeliosTeletransmissionLot findOneByNumeroMarche(string $numero_marche) Return the first CommonHeliosTeletransmissionLot filtered by the numero_marche column
 * @method CommonHeliosTeletransmissionLot findOneByIdsEnvActesEngagements(string $ids_env_actes_engagements) Return the first CommonHeliosTeletransmissionLot filtered by the ids_env_actes_engagements column
 * @method CommonHeliosTeletransmissionLot findOneByIdsEnveloppesItems(string $ids_enveloppes_items) Return the first CommonHeliosTeletransmissionLot filtered by the ids_enveloppes_items column
 * @method CommonHeliosTeletransmissionLot findOneByIdsDocsAcceptes(string $ids_docs_acceptes) Return the first CommonHeliosTeletransmissionLot filtered by the ids_docs_acceptes column
 * @method CommonHeliosTeletransmissionLot findOneByIdsMsgNotif(string $ids_msg_notif) Return the first CommonHeliosTeletransmissionLot filtered by the ids_msg_notif column
 * @method CommonHeliosTeletransmissionLot findOneByLotInTransmission(string $lot_in_transmission) Return the first CommonHeliosTeletransmissionLot filtered by the lot_in_transmission column
 * @method CommonHeliosTeletransmissionLot findOneByStatutEnvoi(int $statut_envoi) Return the first CommonHeliosTeletransmissionLot filtered by the statut_envoi column
 * @method CommonHeliosTeletransmissionLot findOneByIdZipSend(string $id_zip_send) Return the first CommonHeliosTeletransmissionLot filtered by the id_zip_send column
 * @method CommonHeliosTeletransmissionLot findOneByNomLettreCommande(string $nom_lettre_commande) Return the first CommonHeliosTeletransmissionLot filtered by the nom_lettre_commande column
 * @method CommonHeliosTeletransmissionLot findOneByLettreCommande(int $lettre_commande) Return the first CommonHeliosTeletransmissionLot filtered by the lettre_commande column
 * @method CommonHeliosTeletransmissionLot findOneByHorodatage(string $horodatage) Return the first CommonHeliosTeletransmissionLot filtered by the horodatage column
 * @method CommonHeliosTeletransmissionLot findOneByUntrusteddate(string $untrusteddate) Return the first CommonHeliosTeletransmissionLot filtered by the untrusteddate column
 * @method CommonHeliosTeletransmissionLot findOneByTaille(string $taille) Return the first CommonHeliosTeletransmissionLot filtered by the taille column
 * @method CommonHeliosTeletransmissionLot findOneByValiderComptable(string $valider_comptable) Return the first CommonHeliosTeletransmissionLot filtered by the valider_comptable column
 *
 * @method array findByIdTeletransmission(int $id_teletransmission) Return CommonHeliosTeletransmissionLot objects filtered by the id_teletransmission column
 * @method array findByOrganisme(string $organisme) Return CommonHeliosTeletransmissionLot objects filtered by the organisme column
 * @method array findByLot(int $lot) Return CommonHeliosTeletransmissionLot objects filtered by the lot column
 * @method array findByNumeroMarche(string $numero_marche) Return CommonHeliosTeletransmissionLot objects filtered by the numero_marche column
 * @method array findByIdsEnvActesEngagements(string $ids_env_actes_engagements) Return CommonHeliosTeletransmissionLot objects filtered by the ids_env_actes_engagements column
 * @method array findByIdsEnveloppesItems(string $ids_enveloppes_items) Return CommonHeliosTeletransmissionLot objects filtered by the ids_enveloppes_items column
 * @method array findByIdsDocsAcceptes(string $ids_docs_acceptes) Return CommonHeliosTeletransmissionLot objects filtered by the ids_docs_acceptes column
 * @method array findByIdsMsgNotif(string $ids_msg_notif) Return CommonHeliosTeletransmissionLot objects filtered by the ids_msg_notif column
 * @method array findByLotInTransmission(string $lot_in_transmission) Return CommonHeliosTeletransmissionLot objects filtered by the lot_in_transmission column
 * @method array findByStatutEnvoi(int $statut_envoi) Return CommonHeliosTeletransmissionLot objects filtered by the statut_envoi column
 * @method array findByIdZipSend(string $id_zip_send) Return CommonHeliosTeletransmissionLot objects filtered by the id_zip_send column
 * @method array findByNomLettreCommande(string $nom_lettre_commande) Return CommonHeliosTeletransmissionLot objects filtered by the nom_lettre_commande column
 * @method array findByLettreCommande(int $lettre_commande) Return CommonHeliosTeletransmissionLot objects filtered by the lettre_commande column
 * @method array findByHorodatage(string $horodatage) Return CommonHeliosTeletransmissionLot objects filtered by the horodatage column
 * @method array findByUntrusteddate(string $untrusteddate) Return CommonHeliosTeletransmissionLot objects filtered by the untrusteddate column
 * @method array findByTaille(string $taille) Return CommonHeliosTeletransmissionLot objects filtered by the taille column
 * @method array findByValiderComptable(string $valider_comptable) Return CommonHeliosTeletransmissionLot objects filtered by the valider_comptable column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonHeliosTeletransmissionLotQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonHeliosTeletransmissionLotQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonHeliosTeletransmissionLot', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonHeliosTeletransmissionLotQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonHeliosTeletransmissionLotQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonHeliosTeletransmissionLotQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonHeliosTeletransmissionLotQuery) {
            return $criteria;
        }
        $query = new CommonHeliosTeletransmissionLotQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query 
                         A Primary key composition: [$id_teletransmission, $organisme, $lot]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonHeliosTeletransmissionLot|CommonHeliosTeletransmissionLot[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonHeliosTeletransmissionLotPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonHeliosTeletransmissionLotPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonHeliosTeletransmissionLot A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_teletransmission`, `organisme`, `lot`, `numero_marche`, `ids_env_actes_engagements`, `ids_enveloppes_items`, `ids_docs_acceptes`, `ids_msg_notif`, `lot_in_transmission`, `statut_envoi`, `id_zip_send`, `nom_lettre_commande`, `lettre_commande`, `horodatage`, `untrusteddate`, `taille`, `valider_comptable` FROM `Helios_teletransmission_lot` WHERE `id_teletransmission` = :p0 AND `organisme` = :p1 AND `lot` = :p2';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);			
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonHeliosTeletransmissionLot();
            $obj->hydrate($row);
            CommonHeliosTeletransmissionLotPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return CommonHeliosTeletransmissionLot|CommonHeliosTeletransmissionLot[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonHeliosTeletransmissionLot[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return CommonHeliosTeletransmissionLotQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonHeliosTeletransmissionLotPeer::ID_TELETRANSMISSION, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonHeliosTeletransmissionLotPeer::ORGANISME, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(CommonHeliosTeletransmissionLotPeer::LOT, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonHeliosTeletransmissionLotQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonHeliosTeletransmissionLotPeer::ID_TELETRANSMISSION, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonHeliosTeletransmissionLotPeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(CommonHeliosTeletransmissionLotPeer::LOT, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id_teletransmission column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTeletransmission(1234); // WHERE id_teletransmission = 1234
     * $query->filterByIdTeletransmission(array(12, 34)); // WHERE id_teletransmission IN (12, 34)
     * $query->filterByIdTeletransmission(array('min' => 12)); // WHERE id_teletransmission >= 12
     * $query->filterByIdTeletransmission(array('max' => 12)); // WHERE id_teletransmission <= 12
     * </code>
     *
     * @param     mixed $idTeletransmission The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionLotQuery The current query, for fluid interface
     */
    public function filterByIdTeletransmission($idTeletransmission = null, $comparison = null)
    {
        if (is_array($idTeletransmission)) {
            $useMinMax = false;
            if (isset($idTeletransmission['min'])) {
                $this->addUsingAlias(CommonHeliosTeletransmissionLotPeer::ID_TELETRANSMISSION, $idTeletransmission['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTeletransmission['max'])) {
                $this->addUsingAlias(CommonHeliosTeletransmissionLotPeer::ID_TELETRANSMISSION, $idTeletransmission['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionLotPeer::ID_TELETRANSMISSION, $idTeletransmission, $comparison);
    }

    /**
     * Filter the query on the organisme column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisme('fooValue');   // WHERE organisme = 'fooValue'
     * $query->filterByOrganisme('%fooValue%'); // WHERE organisme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organisme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionLotQuery The current query, for fluid interface
     */
    public function filterByOrganisme($organisme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organisme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organisme)) {
                $organisme = str_replace('*', '%', $organisme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionLotPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the lot column
     *
     * Example usage:
     * <code>
     * $query->filterByLot(1234); // WHERE lot = 1234
     * $query->filterByLot(array(12, 34)); // WHERE lot IN (12, 34)
     * $query->filterByLot(array('min' => 12)); // WHERE lot >= 12
     * $query->filterByLot(array('max' => 12)); // WHERE lot <= 12
     * </code>
     *
     * @param     mixed $lot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionLotQuery The current query, for fluid interface
     */
    public function filterByLot($lot = null, $comparison = null)
    {
        if (is_array($lot)) {
            $useMinMax = false;
            if (isset($lot['min'])) {
                $this->addUsingAlias(CommonHeliosTeletransmissionLotPeer::LOT, $lot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lot['max'])) {
                $this->addUsingAlias(CommonHeliosTeletransmissionLotPeer::LOT, $lot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionLotPeer::LOT, $lot, $comparison);
    }

    /**
     * Filter the query on the numero_marche column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroMarche('fooValue');   // WHERE numero_marche = 'fooValue'
     * $query->filterByNumeroMarche('%fooValue%'); // WHERE numero_marche LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numeroMarche The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionLotQuery The current query, for fluid interface
     */
    public function filterByNumeroMarche($numeroMarche = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numeroMarche)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numeroMarche)) {
                $numeroMarche = str_replace('*', '%', $numeroMarche);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionLotPeer::NUMERO_MARCHE, $numeroMarche, $comparison);
    }

    /**
     * Filter the query on the ids_env_actes_engagements column
     *
     * Example usage:
     * <code>
     * $query->filterByIdsEnvActesEngagements('fooValue');   // WHERE ids_env_actes_engagements = 'fooValue'
     * $query->filterByIdsEnvActesEngagements('%fooValue%'); // WHERE ids_env_actes_engagements LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idsEnvActesEngagements The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionLotQuery The current query, for fluid interface
     */
    public function filterByIdsEnvActesEngagements($idsEnvActesEngagements = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idsEnvActesEngagements)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idsEnvActesEngagements)) {
                $idsEnvActesEngagements = str_replace('*', '%', $idsEnvActesEngagements);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionLotPeer::IDS_ENV_ACTES_ENGAGEMENTS, $idsEnvActesEngagements, $comparison);
    }

    /**
     * Filter the query on the ids_enveloppes_items column
     *
     * Example usage:
     * <code>
     * $query->filterByIdsEnveloppesItems('fooValue');   // WHERE ids_enveloppes_items = 'fooValue'
     * $query->filterByIdsEnveloppesItems('%fooValue%'); // WHERE ids_enveloppes_items LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idsEnveloppesItems The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionLotQuery The current query, for fluid interface
     */
    public function filterByIdsEnveloppesItems($idsEnveloppesItems = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idsEnveloppesItems)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idsEnveloppesItems)) {
                $idsEnveloppesItems = str_replace('*', '%', $idsEnveloppesItems);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionLotPeer::IDS_ENVELOPPES_ITEMS, $idsEnveloppesItems, $comparison);
    }

    /**
     * Filter the query on the ids_docs_acceptes column
     *
     * Example usage:
     * <code>
     * $query->filterByIdsDocsAcceptes('fooValue');   // WHERE ids_docs_acceptes = 'fooValue'
     * $query->filterByIdsDocsAcceptes('%fooValue%'); // WHERE ids_docs_acceptes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idsDocsAcceptes The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionLotQuery The current query, for fluid interface
     */
    public function filterByIdsDocsAcceptes($idsDocsAcceptes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idsDocsAcceptes)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idsDocsAcceptes)) {
                $idsDocsAcceptes = str_replace('*', '%', $idsDocsAcceptes);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionLotPeer::IDS_DOCS_ACCEPTES, $idsDocsAcceptes, $comparison);
    }

    /**
     * Filter the query on the ids_msg_notif column
     *
     * Example usage:
     * <code>
     * $query->filterByIdsMsgNotif('fooValue');   // WHERE ids_msg_notif = 'fooValue'
     * $query->filterByIdsMsgNotif('%fooValue%'); // WHERE ids_msg_notif LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idsMsgNotif The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionLotQuery The current query, for fluid interface
     */
    public function filterByIdsMsgNotif($idsMsgNotif = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idsMsgNotif)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idsMsgNotif)) {
                $idsMsgNotif = str_replace('*', '%', $idsMsgNotif);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionLotPeer::IDS_MSG_NOTIF, $idsMsgNotif, $comparison);
    }

    /**
     * Filter the query on the lot_in_transmission column
     *
     * Example usage:
     * <code>
     * $query->filterByLotInTransmission('fooValue');   // WHERE lot_in_transmission = 'fooValue'
     * $query->filterByLotInTransmission('%fooValue%'); // WHERE lot_in_transmission LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lotInTransmission The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionLotQuery The current query, for fluid interface
     */
    public function filterByLotInTransmission($lotInTransmission = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lotInTransmission)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lotInTransmission)) {
                $lotInTransmission = str_replace('*', '%', $lotInTransmission);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionLotPeer::LOT_IN_TRANSMISSION, $lotInTransmission, $comparison);
    }

    /**
     * Filter the query on the statut_envoi column
     *
     * Example usage:
     * <code>
     * $query->filterByStatutEnvoi(1234); // WHERE statut_envoi = 1234
     * $query->filterByStatutEnvoi(array(12, 34)); // WHERE statut_envoi IN (12, 34)
     * $query->filterByStatutEnvoi(array('min' => 12)); // WHERE statut_envoi >= 12
     * $query->filterByStatutEnvoi(array('max' => 12)); // WHERE statut_envoi <= 12
     * </code>
     *
     * @param     mixed $statutEnvoi The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionLotQuery The current query, for fluid interface
     */
    public function filterByStatutEnvoi($statutEnvoi = null, $comparison = null)
    {
        if (is_array($statutEnvoi)) {
            $useMinMax = false;
            if (isset($statutEnvoi['min'])) {
                $this->addUsingAlias(CommonHeliosTeletransmissionLotPeer::STATUT_ENVOI, $statutEnvoi['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statutEnvoi['max'])) {
                $this->addUsingAlias(CommonHeliosTeletransmissionLotPeer::STATUT_ENVOI, $statutEnvoi['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionLotPeer::STATUT_ENVOI, $statutEnvoi, $comparison);
    }

    /**
     * Filter the query on the id_zip_send column
     *
     * Example usage:
     * <code>
     * $query->filterByIdZipSend('fooValue');   // WHERE id_zip_send = 'fooValue'
     * $query->filterByIdZipSend('%fooValue%'); // WHERE id_zip_send LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idZipSend The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionLotQuery The current query, for fluid interface
     */
    public function filterByIdZipSend($idZipSend = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idZipSend)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idZipSend)) {
                $idZipSend = str_replace('*', '%', $idZipSend);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionLotPeer::ID_ZIP_SEND, $idZipSend, $comparison);
    }

    /**
     * Filter the query on the nom_lettre_commande column
     *
     * Example usage:
     * <code>
     * $query->filterByNomLettreCommande('fooValue');   // WHERE nom_lettre_commande = 'fooValue'
     * $query->filterByNomLettreCommande('%fooValue%'); // WHERE nom_lettre_commande LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomLettreCommande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionLotQuery The current query, for fluid interface
     */
    public function filterByNomLettreCommande($nomLettreCommande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomLettreCommande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomLettreCommande)) {
                $nomLettreCommande = str_replace('*', '%', $nomLettreCommande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionLotPeer::NOM_LETTRE_COMMANDE, $nomLettreCommande, $comparison);
    }

    /**
     * Filter the query on the lettre_commande column
     *
     * Example usage:
     * <code>
     * $query->filterByLettreCommande(1234); // WHERE lettre_commande = 1234
     * $query->filterByLettreCommande(array(12, 34)); // WHERE lettre_commande IN (12, 34)
     * $query->filterByLettreCommande(array('min' => 12)); // WHERE lettre_commande >= 12
     * $query->filterByLettreCommande(array('max' => 12)); // WHERE lettre_commande <= 12
     * </code>
     *
     * @param     mixed $lettreCommande The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionLotQuery The current query, for fluid interface
     */
    public function filterByLettreCommande($lettreCommande = null, $comparison = null)
    {
        if (is_array($lettreCommande)) {
            $useMinMax = false;
            if (isset($lettreCommande['min'])) {
                $this->addUsingAlias(CommonHeliosTeletransmissionLotPeer::LETTRE_COMMANDE, $lettreCommande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lettreCommande['max'])) {
                $this->addUsingAlias(CommonHeliosTeletransmissionLotPeer::LETTRE_COMMANDE, $lettreCommande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionLotPeer::LETTRE_COMMANDE, $lettreCommande, $comparison);
    }

    /**
     * Filter the query on the horodatage column
     *
     * Example usage:
     * <code>
     * $query->filterByHorodatage('fooValue');   // WHERE horodatage = 'fooValue'
     * $query->filterByHorodatage('%fooValue%'); // WHERE horodatage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $horodatage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionLotQuery The current query, for fluid interface
     */
    public function filterByHorodatage($horodatage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($horodatage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $horodatage)) {
                $horodatage = str_replace('*', '%', $horodatage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionLotPeer::HORODATAGE, $horodatage, $comparison);
    }

    /**
     * Filter the query on the untrusteddate column
     *
     * Example usage:
     * <code>
     * $query->filterByUntrusteddate('fooValue');   // WHERE untrusteddate = 'fooValue'
     * $query->filterByUntrusteddate('%fooValue%'); // WHERE untrusteddate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $untrusteddate The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionLotQuery The current query, for fluid interface
     */
    public function filterByUntrusteddate($untrusteddate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($untrusteddate)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $untrusteddate)) {
                $untrusteddate = str_replace('*', '%', $untrusteddate);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionLotPeer::UNTRUSTEDDATE, $untrusteddate, $comparison);
    }

    /**
     * Filter the query on the taille column
     *
     * Example usage:
     * <code>
     * $query->filterByTaille('fooValue');   // WHERE taille = 'fooValue'
     * $query->filterByTaille('%fooValue%'); // WHERE taille LIKE '%fooValue%'
     * </code>
     *
     * @param     string $taille The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionLotQuery The current query, for fluid interface
     */
    public function filterByTaille($taille = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($taille)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $taille)) {
                $taille = str_replace('*', '%', $taille);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionLotPeer::TAILLE, $taille, $comparison);
    }

    /**
     * Filter the query on the valider_comptable column
     *
     * Example usage:
     * <code>
     * $query->filterByValiderComptable('fooValue');   // WHERE valider_comptable = 'fooValue'
     * $query->filterByValiderComptable('%fooValue%'); // WHERE valider_comptable LIKE '%fooValue%'
     * </code>
     *
     * @param     string $validerComptable The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionLotQuery The current query, for fluid interface
     */
    public function filterByValiderComptable($validerComptable = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($validerComptable)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $validerComptable)) {
                $validerComptable = str_replace('*', '%', $validerComptable);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionLotPeer::VALIDER_COMPTABLE, $validerComptable, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonHeliosTeletransmissionLot $commonHeliosTeletransmissionLot Object to remove from the list of results
     *
     * @return CommonHeliosTeletransmissionLotQuery The current query, for fluid interface
     */
    public function prune($commonHeliosTeletransmissionLot = null)
    {
        if ($commonHeliosTeletransmissionLot) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonHeliosTeletransmissionLotPeer::ID_TELETRANSMISSION), $commonHeliosTeletransmissionLot->getIdTeletransmission(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonHeliosTeletransmissionLotPeer::ORGANISME), $commonHeliosTeletransmissionLot->getOrganisme(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(CommonHeliosTeletransmissionLotPeer::LOT), $commonHeliosTeletransmissionLot->getLot(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
